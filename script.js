



    let Videos = ["Assets/Videos/1.mp4", "Assets/Videos/2.mp4", "Assets/Videos/3.mp4", "Assets/Videos/4.mp4", 
    "Assets/Videos/5.mp4", "Assets/Videos/6.mp4", "Assets/Videos/7.mp4", "Assets/Videos/8.mp4",];

    var number = Math.floor((Math.random()*8)+1);
    
    let ranVideo = Videos[number];
    
    document.getElementById("QuizVid").src = ranVideo;

    document.querySelector(".main_video").load();



    let question = {
        title: 'Which bear is depicted in the video? (CHOOSE ONE)',
        alternatives: ['asiatic bear', 'black bear', 'grizzly bear', 'panda bear',
                        'polar bear', 'sloth bear', 'spectacled bear', 'sun bear'],
        correctAnswer: number
      };
      function showQuestion(q) {
        let titleDiv = document.getElementById("title");

        titleDiv.textContent = q.title;
        
        let alts = document.querySelectorAll('.alternative');
        
        alts.forEach(function(element, index){

          element.textContent = q.alternatives[index];

          element.addEventListener('click', function(){
            if (q.correctAnswer == index) {
              alert('Nice! You got it correct. You can reload the page to try another video');
            } else {
              alert('Wrong.You can reload the page to try another video');
            }
          });
        });
      }
      showQuestion(question);

      var images = document.querySelectorAll('.pics');

      images.forEach(function(image) {
      image.addEventListener('mouseover', function() {
      this.style.transform = 'scale(1.5)';
      });

    image.addEventListener('mouseout', function() {
    this.style.transform = 'scale(1)';
    });
  });
      