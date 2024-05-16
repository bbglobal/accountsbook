const extenderSections = document.querySelectorAll(".extender-section");

extenderSections.forEach((section) => {
  section.addEventListener("click", () => {
    const span = section.querySelector("span");
    const paragraphs = section.querySelectorAll("p");

    paragraphs.forEach((paragraph) => {
      if (paragraph.style.display === "block") {
        paragraph.style.display = "none";
        span.innerText = "+";
      } else {
        paragraph.style.display = "block";
        span.innerText = "-";
      }
    });
  });
});

const navBar = document.getElementById("mynav");
const btn = document.getElementById("btn");
const logoBlack = document.getElementById("logo-black");
const logoWhite = document.getElementById("logo-white");
const icon = document.getElementById("services-icon");
const iconb = document.getElementById("services-iconb");

function updateNavBarBackground() {
  if (window.scrollY > 0) {
    navBar.style.backgroundColor = "white";
    logoBlack.style.display = "block";
    logoWhite.style.display = "none";
    icon.style.display = "none";
    iconb.style.display = "inline";
  } else {
    navBar.style.backgroundColor = "transparent";
    btn.style.backgroundColor = "transparent";
    logoBlack.style.display = "none";
    logoWhite.style.display = "block";
    icon.style.display = "inline";
    iconb.style.display = "none";
  }
}

window.addEventListener("scroll", updateNavBarBackground);

window.addEventListener("scroll", function () {
  var nav = document.getElementById("mynav");
  var scrolled = window.scrollY > 0;
  if (scrolled) {
    nav.classList.add("scrolled");
  } else {
    nav.classList.remove("scrolled");
  }
});

var services = document.getElementById("services");
var menu = document.getElementById("menu-drop");
var servicesIcon = document.getElementById("services-icon");
menu.style.display = "none";

services.addEventListener("click", () => {
  if (menu.style.display === "none") {
    menu.style.display = "block";
    servicesIcon.classList.add("transform-upward");
  } else {
    menu.style.display = "none";
    servicesIcon.classList.remove("transform-upward");
  }
});

//chatbot
$(document).ready(function () {
  $("#send-btn").on("click", function () {
    $value = $("#data").val();
    $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
    $(".form").append($msg);
    $("#data").val('');

    // start ajax code
    $.ajax({
      url: 'message.php',
      type: 'POST',
      data: 'text=' + $value,
      success: function (result) {
        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fa fa-user"></i></div><div class="msg-header"><p>' + result + '</p></div></div>';
        $(".form").append($replay);
        // when chat goes down the scroll bar automatically comes to the bottom
        $(".form").scrollTop($(".form")[0].scrollHeight);
      }
    });
  });
});

const showChatBtn = document.getElementById("show-chat-btn");
const chatbox = document.getElementById("chatbox");

setTimeout(function () {
  showChatBtn.style.animation = "fade-in .5s ease-in forwards";
  console.log("working");
}, 5000);

chatbox.style.display = "none";
showChatBtn.addEventListener("click", () => {
  if (chatbox.style.display == "none") {
    chatbox.style.display = "block";
  } else {
    chatbox.style.display = "none";
  }
});

