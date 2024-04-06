let videoList = document.querySelectorAll('.video-list-container-playlist .list');

videoList.forEach(vid =>{
   vid.onclick = () =>{
      videoList.forEach(remove =>{remove.classList.remove('active')});
      vid.classList.add('active');
      let src = vid.querySelector('.list-video').src;
      let title = vid.querySelector('.list-title').innerHTML;
      document.querySelector('.main-video-container-playlist .main-video').src = src;
      // document.querySelector('.main-video-container-playlist .main-video').play();
      document.querySelector('.main-video-container-playlist .main-vid-title').innerHTML = title;
   };
});