// Sistema de imagens aleatórias
const images = [
    "https://media0.giphy.com/media/5Zesu5VPNGJlm/giphy.gif",
    "https://i.gifer.com/origin/64/649bac228697cb7e9137f1996675e022_w200.gif",
    "https://i.pinimg.com/originals/ad/c5/e5/adc5e5d69a35c6115b326705947c9d46.gif",
    "https://i.gifer.com/AM9Y.gif"
  ];
  
  // Seleciona uma imagem aleatória
  const randomImage = images[Math.floor(Math.random() * images.length)];
  
  // Aplica a imagem ao elemento <img>
  document.getElementById('random-image').src = randomImage;
  
  // Evento de envio do formulário
  document.getElementById('contact-form').addEventListener('submit', function (e) {
      e.preventDefault(); // Previne o comportamento padrão do formulário
      
      const name = document.getElementById('name').value.trim();
      const email = document.getElementById('email').value.trim();
      const message = document.getElementById('message').value.trim();
    
      if (name && email && message) {
          alert(`Obrigado, ${name}! Sua mensagem foi enviada.`);
          this.reset(); // Limpa o formulário
      } else {
          alert('Por favor, preencha todos os campos.');
      }
  });
  