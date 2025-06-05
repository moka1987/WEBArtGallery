//ნახატების სრულ ზომაში სანახავად
document.addEventListener('DOMContentLoaded', () => {
  const lightbox = document.getElementById('lightbox');
  const lightboxImg = lightbox.querySelector('.lightbox-img');
  const closeBtn = lightbox.querySelector('.close');

  // ყველა გალერეის სურათს დაკლიკებით გახსნისთვის
  document.querySelectorAll('.gallery-item img').forEach(img => {
    img.addEventListener('click', () => {
      lightboxImg.src = img.src;  // დიდი სურათი - იგივე, ახლა შეგიძლია სრულ ზომაზე გახსნას
      lightbox.style.display = 'flex';
    });
  });

  // დახურვა ღილაკზე
  closeBtn.addEventListener('click', () => {
    lightbox.style.display = 'none';
  });

  // თუ დააკლიკე ფონს, დახურე ლაითბოქსი
  lightbox.addEventListener('click', (e) => {
    if (e.target === lightbox) {
      lightbox.style.display = 'none';
    }
  });
});
//კონტაქტისთვის
 $(document).ready(function(){
    $("#contactForm").on("submit", function(event){
      var isValid = true;
      var name = $("#name").val().trim();
      var email = $("#email").val().trim();
      var message = $("#message").val().trim();

      if(name.length < 3){
        alert("გთხოვთ შეიყვანოთ თქვენი სრული სახელი.");
        isValid = false;
      }
      if(email === ""){
        alert("გთხოვთ შეიყვანოთ ელ-ფოსტა.");
        isValid = false;
      }
      if(message.length < 10){
        alert("შეტყობინება ძალიან მოკლეა.");
        isValid = false;
      }

      if(!isValid){
        event.preventDefault();
      }
    });
  });

