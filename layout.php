<!DOCTYPE html>
<html>
<head>
  <title>Welcome to bakchodi room</title>
</head>
  <style type="text/css">
   @import url(https://fonts.googleapis.com/css?family=Lato);
* {
  box-sizing: border-box;
}

#container {
  background: #333333;
  color: #e8e8e8;
  width: 80%;
  min-height: 100vh;
  min-width: 20rem;
  margin: 1em auto;
  border-radius: 8px;
  padding: 1.5rem;
  font-family: 'Lato', sans-serif;
}
#container .message {
  display: flex;
  flex-direction: horizontal;
  margin: 1.5rem 0;
  position: relative;
}
#container .message .picture {
  background: #666666;
  border-radius: 50%;
  margin-right: 6rem;
  line-height: 4rem;
  vertical-align: bottom;
  font-size: 2rem;
  font-weight: bold;
  text-align: center;
}
#container .message .contents {
  background: #464646;
  flex: 1;
  margin-right: calc(4rem - 1rem - 0.5rem);
  align-self: center;
  padding: .75rem 1rem;
  border-radius: 4px;
}
#container .message .contents::before {
  content: '';
  display: block;
  position: absolute;
  top: calc(4rem/2 - 0.75rem/2);
  left: calc(4rem + 2rem - 0.75rem/2);
  background: #464646;
  width: 0.75rem;
  height: 0.75rem;
  transform: rotate(45deg);
}
#container .mine {
  flex-direction: row-reverse;
}
#container .mine .picture {
  margin-left: 6rem;
  margin-right: 0;
}
#container .mine .contents {
  margin-right: 0;
  margin-left: calc(4rem - 1rem - 0.5rem);
  background: #394046;
}
#container .mine .contents::before {
  position: absolute;
  background: #394046;
  left: auto;
  right: calc(4rem + 2rem - 0.75rem/2);
}


  </style>
<body>
  <div id="container">
  <ul>
    <li class="message">
      <div class="picture"></div>
      <div class="contents">
        These are the message's contents.
        <br />
        Adding more text to see how it turns out.
        <br />
        And yet some
        <br />
        more
        <br />
        lines
      </div>
    </li>
    
    <li class="message">
      <div class="picture"></div>
      <div class="contents">
        This is another comment
        <br />
        with two lines
      </div>
    </li>
    
    <li class="message mine">
      <div class="picture"></div>
      <div class="contents">Some other message</div>
    </li>
    
    <li class="message">
      <div class="picture"></div>
      <div class="contents">Some other message</div>
    </li>
  </ul>
</div>

</body>
</html>