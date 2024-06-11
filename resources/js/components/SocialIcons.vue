<template>
    <div id="app">
      <div style="flex: 1;"></div>
      <footer>
        Redes sociales:
        <br />
        <div class="icons">
          <a href="#">
            <div class="layer">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <div class="icon">
                <i><img src="./assets/simbolo-de-la-aplicacion-de-facebook.png" class="iconsInt" alt="" /></i>
              </div>
            </div>
            <br />
            <div>facebook</div>
          </a>
        </div>
        <div class="icons">
          <a href="#">
            <div class="layer">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <div class="icon">
                <i><img src="./assets/medios-de-comunicacion-social.png" class="iconsInt" alt="" /></i>
              </div>
            </div>
            <br />
            <div>twitter</div>
          </a>
        </div>
        <div class="icons">
          <a href="#">
            <div class="layer">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <div class="icon">
                <i><img src="./assets/instagram.png" class="iconsInt" alt="" /></i>
              </div>
            </div>
            <br />
            <div>instagram</div>
          </a>
        </div>
        <div class="icons">
          <a href="#">
            <div class="layer">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <div class="icon">
                <i><img src="./assets/tik-tok.png" class="iconsInt" alt="" /></i>
              </div>
            </div>
            <br />
            <div>tiktok</div>
          </a>
        </div>
      </footer>
    </div>
  </template>
  
  <script>
  export default {
    name: 'SocialIcons',
  };
  </script>
  
  <style scoped>
  body {
    margin: 0;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    min-height: 100vh;
    background-color: #333;
    color: #fff;
  }
  
  footer {
    border: 2px solid white;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 40px;
    background-color: #222;
  }
  
  .icons {
    display: flex;
  }
  
  .iconsInt {
    display: flex;
    width: 40px;
    height: 40px;
    text-align: center;
  }
  
  .icons a {
    text-decoration: none;
    color: inherit;
    margin: 0 20px;
  }
  
  .icons a .layer {
    position: relative;
    width: 55px;
    height: 55px;
    transition: transform 0.4s;
  }
  
  .icons a:hover .layer {
    transform: rotate(-30deg) skew(20deg);
  }
  
  .icons a .layer span {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: 1px solid #fff;
    border-radius: 5px;
    transition: all 0.4s;
  }
  
  .icons a:hover .layer span:nth-child(1) {
    opacity: 0.2;
  }
  
  .icons a:hover .layer span:nth-child(2) {
    opacity: 0.4;
    transform: translate(5px, -5px);
  }
  
  .icons a:hover .layer span:nth-child(3) {
    opacity: 0.6;
    transform: translate(10px, -10px);
  }
  
  .icons a:hover .layer span:nth-child(4) {
    opacity: 0.8;
    transform: translate(15px, -15px);
  }
  
  .icons a .icon {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  
  .icons a .icon i {
    font-size: 30px;
  }
  
  .icons .text {
    margin-top: 10px;
    text-align: center;
  }
  div{
    color:white;
  }
  </style>
  