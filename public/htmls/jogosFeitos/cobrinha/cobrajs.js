const canvas = document.getElementById("gameCanvas");
        const ctx = canvas.getContext("2d");
        const startButton = document.getElementById("startButton");
        const restartButton = document.getElementById("restartButton");
        const menu = document.getElementById("menu");
        const gameOverScreen = document.getElementById("gameOverScreen");
        const backgroundMusic = document.getElementById("backgroundMusic");
        const gameOverMusic = document.getElementById("gameOverMusic");
        const scoreDisplay = document.getElementById("score");
        const finalScore = document.getElementById("finalScore");
       
        const gridSize = 20;
        let snake, direction, food, gameRunning, score, speed;
       
        function initializeGame() {
            snake = [{ x: 200, y: 200 }];
            direction = "right";
            food = { x: 100, y: 100 };
            gameRunning = true;
            score = 0;
            speed = 100;
            scoreDisplay.innerText = "Pontuação: " + score;
        }
       
        function draw() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
           
            ctx.fillStyle = "lime";
            snake.forEach(segment => ctx.fillRect(segment.x, segment.y, gridSize, gridSize));
           
            ctx.fillStyle = "red";
            ctx.fillRect(food.x, food.y, gridSize, gridSize);
        }
       
        function update() {
            if (!gameRunning) return;
           
            let head = { ...snake[0] };
            if (direction === "right") head.x += gridSize;
            if (direction === "left") head.x -= gridSize;
            if (direction === "up") head.y -= gridSize;
            if (direction === "down") head.y += gridSize;
           
            if (head.x === food.x && head.y === food.y) {
                food.x = Math.floor(Math.random() * (canvas.width / gridSize)) * gridSize;
                food.y = Math.floor(Math.random() * (canvas.height / gridSize)) * gridSize;
                score += 10;
                scoreDisplay.innerText = "Pontuação: " + score;
                if (speed > 50) speed -= 5;
            } else {
                snake.pop();
            }
           
            if (head.x < 0 || head.x >= canvas.width || head.y < 0 || head.y >= canvas.height ||
                snake.some(segment => segment.x === head.x && segment.y === head.y)) {
                gameRunning = false;
                backgroundMusic.pause();
                gameOverMusic.currentTime = 0;
                gameOverMusic.play();
                gameOverScreen.style.display = "flex";
                finalScore.innerText = "Sua pontuação final foi: " + score;
                return;
            }
           
            snake.unshift(head);
        }
       
        function changeDirection(event) {
            const key = event.key;
            if (key === "ArrowUp" && direction !== "down") direction = "up";
            if (key === "ArrowDown" && direction !== "up") direction = "down";
            if (key === "ArrowLeft" && direction !== "right") direction = "left";
            if (key === "ArrowRight" && direction !== "left") direction = "right";
        }
       
        document.addEventListener("keydown", changeDirection);
       
        function gameLoop() {
            update();
            draw();
            if (gameRunning) setTimeout(gameLoop, speed);
        }
       
        startButton.addEventListener("click", () => {
            menu.style.display = "none";
            canvas.style.display = "block";
            scoreDisplay.style.display = "block";
            initializeGame();
            backgroundMusic.currentTime = 0; // Reinicia a música
            backgroundMusic.play();
            gameLoop();
        });
       
        restartButton.addEventListener("click", () => {
            gameOverScreen.style.display = "none";
            initializeGame();
           
            // Para a música de Game Over
            gameOverMusic.pause();
            gameOverMusic.currentTime = 0;
           
            // Reinicia e toca a música de fundo
            backgroundMusic.currentTime = 0;
            backgroundMusic.play();
           
            gameLoop();
        });