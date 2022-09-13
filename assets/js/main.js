// <!-- modal script  -->
        // custom slider autoplay function 
        let slideIndex = 0;

        var timer;

        // change slide item
        const changeSlide = (index) => {

            const items = document.querySelectorAll('.carousel-item');
            if (index < 0) {
                slideIndex = items.length - 1;
                index = slideIndex;
            };

            if (index >= items.length) {
                index = 0;
                slideIndex = 0;
            }

            items.forEach(item => {
                item.style.opacity = "0"
                item.style.position = "absolute"
            })

            items[index].style.opacity = "100"
            items[index].style.position = "static"
        }


        // changeSlide(0);
        timer = setInterval(function () {
            slideIndex++;
            changeSlide(slideIndex);
        }, 5500);

        //modal Start
        var openmodal = document.querySelectorAll('.modal-open')
        for (var i = 0; i < openmodal.length; i++) {
            openmodal[i].addEventListener('click', function (event) {
                event.preventDefault()
                toggleModal()
            })
        }

        const overlay = document.querySelector('.modal-overlay')
        overlay.addEventListener('click', toggleModal)

        var closemodal = document.querySelectorAll('.modal-close')
        for (var i = 0; i < closemodal.length; i++) {
            closemodal[i].addEventListener('click', toggleModal)
        }

        document.onkeydown = function (evt) {
            evt = evt || window.event
            var isEscape = false
            if ("key" in evt) {
                isEscape = (evt.key === "Escape" || evt.key === "Esc")
            } else {
                isEscape = (evt.keyCode === 27)
            }
            if (isEscape && document.body.classList.contains('modal-active')) {
                toggleModal()
            }
        };


        function toggleModal() {
            const body = document.querySelector('body')
            const modal = document.querySelector('.modal')
            modal.classList.toggle('opacity-0')
            modal.classList.toggle('pointer-events-none')
            body.classList.toggle('modal-active')
        }
    // <!-- modal script -->

    // accordion script -->
    var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
    // accordion script -->
