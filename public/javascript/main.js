// Check If We Have Data In localStorage

if (window.localStorage.getItem("data-color") !== null) {
    document.documentElement.style.setProperty(
        "--main-color",
        window.localStorage.getItem("data-color")
    );

    document.querySelectorAll(".colors-list li").forEach((color) => {
        color.classList.remove("active");

        if (color.dataset.color === window.localStorage.getItem("data-color")) {
            color.classList.add("active");
        }
    });
}

// Creating Toggle For Our Side Menu
let settingBox = document.querySelector(".setting-box");
let faGear = document.querySelector(".fa-gear");

faGear.onclick = function () {
    settingBox.classList.toggle("show-box");
    faGear.classList.toggle("fa-spin");
};

// Using Random Color

let colorLi = document.querySelectorAll(".colors-list li");

colorLi.forEach((color) => {
    color.addEventListener("click", (e) => {
        colorLi.forEach((li) => {
            li.classList.remove("active");
        });
        e.target.classList.add("active");
        document.documentElement.style.setProperty(
            "--main-color",
            e.target.dataset.color
        );
        window.localStorage.setItem("data-color", e.target.dataset.color);
    });
});

// Toggle Menu
let otherLinks = document.querySelector(".other-links");
let megaMenu = document.querySelector(".mega-menu");
otherLinks.onclick = function () {
    megaMenu.classList.toggle("active");
    console.log("clicked");
    window.onscroll = function () {
        megaMenu.classList.remove("active");
    };
};

window.onscroll = function () {
    // Our Skill Section onScroll Changes The Width Of The Span Using The Dataset

    skills();

    // Stats Counter
    let statsSection = document.querySelector("#stats");
    if (window.scrollY >= statsSection.offsetTop + 20) {
        // console.log('We Are Here');
        statFunc();
    }
};
// Skills Function
let ourSkills = document.querySelector(".our-skills");
let spans = document.querySelectorAll(".the-progress span");
function skills() {
    if (window.scrollY >= ourSkills.offsetTop + 50) {
        spans.forEach((span) => (span.style.width = span.dataset.width));
    }
}

// Stats Counter Function
function statFunc() {
    let valueDisplyed = document.querySelectorAll("#stats .number");
    let interval = 3000;
    valueDisplyed.forEach((display) => {
        let startValue = 0;
        let endValue = display.dataset.goal;

        duration = Math.floor(interval / endValue);
        let counter = setInterval(() => {
            startValue += 1;
            display.textContent = startValue;
            if (startValue == endValue) {
                clearInterval(counter);
            }
        }, duration);
    });
}
