<section>
  <button id="show-chat-btn">
    <img src="img/bot.png" alt="chat-bot">
  </button>
  <div class="wrapper" id="chatbox">
    <div class="title">Simple Online Chatbot</div>
    <div class="form">
      <div class="bot-inbox inbox">
        <div class="icon">
          <i class="fa fa-user"></i>
        </div>
        <div class="msg-header">
          <p>Hey 👋 Would you like to schedule a time to chat with someone to learn more about Accountsbook?</p>
        </div>
      </div>
    </div>
    <div class="typing-field">
      <div class="input-data">
        <input id="data" type="text" placeholder="Chat with us  .." required>
        <button id="send-btn">Send</button>
      </div>
    </div>
  </div>
</section>

<section id="calendly">
  <!-- Calendly badge widget begin -->
  <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
  <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
  <script type="text/javascript">
    window.onload = function() {
      Calendly.initBadgeWidget({
        url: 'https://calendly.com/info-accsbook/30min',
        text: 'Schedule a free call',
        color: 'linear-gradient(180deg, #ef2a03 0%, #ff8024 100%)',
        textColor: '#ffffff',
        width: '100%'
      });
    }
  </script>
  <!-- Calendly badge widget end -->
</section>

<footer class="container my-5">
  <div class="row">
    <div class="col-12 col-sm-12 col-md-3">
      <div>
        <a href="index.php">
          <img src="img/logo.png" alt="logo" width="60%">
        </a>
      </div>
      <div style="margin-left: 15px;">
        <a href="tel:(315) 907-4273">
          (315) 907-4273
        </a>
      </div>
    </div>
    <div class="col-12 col-sm-12 col-md-3">
      <ul>
        <li>
          <strong>COMPANY</strong>
        </li>
        <li>
          <a href="terms-of-use.php">Terms of use</a>
        </li>
        <li>
          <a href="tnc.php">Terms and Conditions</a>
        </li>
      </ul>
    </div>
    <div class="col-12 col-sm-12 col-md-3">
      <ul>
        <li>
          <strong>SERVICES</strong>
        </li>
        <li>
          <a href="how-it-works.php">Regular Bookkeeping</a>
        </li>
        <li>
          <a href="catch-up-bookkeeping-services.php">Catch-up-Bookkeeping</a>
        </li>
        <li>
          <a href="prices.php">Pricing</a>
        </li>
      </ul>
    </div>
    <div class="col-12 col-sm-12 col-md-3">
      <ul>
        <li>
          <strong>RESOURCES</strong>
        </li>
        <li>
          <a href="index.php#faq">FAQ</a>
        </li>
      </ul>
    </div>
    <hr>
    <div class="col-12">
      <p>All Rights Reserved &copy; <span id="year"></span> <a href="mailto:info@accountsbook.co">accountsbook.co</a></p>
    </div>
  </div>
</footer>

</body>

</html>