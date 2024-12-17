<html>
    <body>

<button id="notifications-button" data-topic="mytopic" data-action="subscribe">Subscribe</button>
<label>
  <input type="checkbox" name="tags[]" value="topic1" class="notification-preferences">
  Topic1
</label>
<label>
  <input type="checkbox" name="tags[]" value="topic2" class="notification-preferences">
  Topic2
</label>
<script>
document.addEventListener('DOMContentLoaded', function () {
  var button = document.getElementById('notifications-button');
  var topic = button.dataset.topic;

  var setButtonStatus = function (isSubscribed) {
    // if you are subscribed to the topic
    // you see that you are already subscribed and you can unsubscribe
    if (isSubscribed) {
      button.innerText = 'Subscribed';
      button.dataset.action = 'unsubscribe';

    // if you are not subsribed to the topic
    // you see a subscribe button
    } else {
      button.innerText = 'Subscribe';
      button.dataset.action = 'subscribe';
    }
  };

  // check if the user is subscribed to the specific topic
  // and initialize the button with the correct status
  pushpad('status', function (isSubscribed, tags) {
    setButtonStatus(isSubscribed && tags.indexOf(topic) != -1);
  });

  // when the user clicks the button...
  button.addEventListener('click', function() {
    // subscribe
    if (button.dataset.action == 'subscribe') {
      pushpad('subscribe', function (isSubscribed) {
        if (isSubscribed) {
          setButtonStatus(true);
        } else {
          alert("You have blocked the notifications from browser preferences.");
        }
      }, { tags: [topic] });

    // unsubscribe
    } else {
      pushpad('unsubscribe', function () {
        setButtonStatus(false);
      }, { tags: [topic] });
    }
  });
});
    </script></body></html>