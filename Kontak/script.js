// HTML structure for luxurious contact information
const contactHTML = `
  <div id="contact" style="font-family: Georgia, 'Times New Roman', Times, serif; margin: 70px auto; max-width: 1100px; height: 500px; border: none; border-radius: 20px; box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2); overflow: hidden; background: linear-gradient(135deg, #ff7e5f,rgb(250, 185, 136)); color: #fff;">
    <div style="background-color: rgba(0, 0, 0, 0.3); color: white; padding: 30px; text-align: center; border-bottom: 2px solid rgba(255, 255, 255, 0.3);">
      <h2 style="margin: 0; font-size: 2.5em; font-weight: bold;">Hubungi Kami</h2>
    </div>
    <div style="padding: 30px;">
      <p style="font-size: 1.2em; text-align: center; margin-bottom: 30px;">Kami selalu siap membantu Anda! Hubungi kami melalui salah satu platform di bawah ini!</p>
      <div style="display: flex; justify-content: space-around; flex-wrap: wrap;">
        <a href="https://wa.me/yournumber" target="_blank" style="text-decoration: none;">
          <div style="text-align: center; color: black;  padding: 20px; border-radius: 15px; width: 150px; height: 120px; transition: transform 0.3s, background-color 0.3s; background: rgba(255, 255, 255, 0.2);">
            <img src="https://cdn-icons-png.flaticon.com/512/124/124034.png" alt="WhatsApp" style="width: 80px; margin-bottom: 10px;">
            <span style="font-weight: bold; font-size: 1.1em; display: block;">WhatsApp</span>
          </div>
        </a>
        <a href="https://facebook.com/yourprofile" target="_blank" style="text-decoration: none;">
          <div style="text-align: center; color: black; padding: 20px; border-radius: 15px; width: 150px; height: 120px; transition: transform 0.3s, background-color 0.3s; background: rgba(255, 255, 255, 0.2);">
            <img src="https://cdn-icons-png.flaticon.com/512/124/124010.png" alt="Facebook" style="width: 80px; margin-bottom: 10px;">
            <span style="font-weight: bold; font-size: 1.1em;">Facebook</span>
          </div>
        </a>
        <a href="https://instagram.com/yourprofile" target="_blank" style="text-decoration: none;">
          <div style="text-align: center; color: black; padding: 20px; border-radius: 15px; width: 150px; height: 120px; transition: transform 0.3s, background-color 0.3s; background: rgba(255, 255, 255, 0.2);">
            <img src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png" alt="Instagram" style="width: 80px; margin-bottom: 10px;">
            <span style="font-weight: bold; font-size: 1.1em;">Instagram</span>
          </div>
        </a>
        <a href="https://twitter.com/yourprofile" target="_blank" style="text-decoration: none;">
          <div style="text-align: center; color: black; padding: 20px; border-radius: 15px; width: 150px; height: 120px; transition: transform 0.3s, background-color 0.3s; background: rgba(255, 255, 255, 0.2);">
            <img src="https://cdn-icons-png.flaticon.com/512/733/733579.png" alt="Twitter" style="width: 80px; margin-bottom: 10px;">
            <span style="font-weight: bold; font-size: 1.1em;">Twitter</span>
          </div>
        </a>
      <a href="mailto:youremail@example.com" target="_blank" style="text-decoration: none;">
  <div style="text-align: center; color: black; padding: 20px; border-radius: 15px; width: 150px; height: 120px; transition:  transform 0.3s, background-color 0.3s; background: rgba(255, 255, 255, 0.2);">
    <img src="https://cdn-icons-png.flaticon.com/512/732/732200.png" alt="Email" style="width: 80px; margin-bottom: 10px;">
    <span style="font-weight: bold; font-size: 1.1em; display: block; ">Email</span>
  </div>
</a>
      </div>
    </div>
  </div>
`;

// Insert the HTML structure into the body of the webpage
document.body.innerHTML = contactHTML;

// Add hover effect with luxurious animation
const contactCards = document.querySelectorAll("#contact a div");
contactCards.forEach((card) => {
  card.addEventListener("mouseover", () => {
    card.style.transform = "scale(1.1)";
    card.style.backgroundColor = "rgba(255, 255, 255, 0.4)";
  });
  card.addEventListener("mouseout", () => {
    card.style.transform = "scale(1)";
    card.style.backgroundColor = "rgba(255, 255, 255, 0.2)";
  });
});
