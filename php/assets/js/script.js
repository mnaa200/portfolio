/* =========================================================
   AMINA IFTIKHAR - PORTFOLIO JAVASCRIPT
========================================================= */

document.addEventListener("DOMContentLoaded", function () {

    /* =====================================================
       ELEMENTS
    ===================================================== */

    const menuToggle = document.getElementById("menu-toggle");
    const navMenu = document.getElementById("nav-menu");

    const navLinks = document.querySelectorAll(".nav-link");

    const filterButtons =
        document.querySelectorAll(".filter-btn");

    const projectCards =
        document.querySelectorAll(".project-card");

    const sections =
        document.querySelectorAll("main section[id]");


    /* =====================================================
       MOBILE NAVIGATION
    ===================================================== */

    if (menuToggle && navMenu) {

        menuToggle.addEventListener("click", function () {

            navMenu.classList.toggle("active");

            const isOpen =
                navMenu.classList.contains("active");

            menuToggle.setAttribute(
                "aria-expanded",
                isOpen ? "true" : "false"
            );

            menuToggle.setAttribute(
                "aria-label",
                isOpen
                    ? "Close navigation menu"
                    : "Open navigation menu"
            );

            /* Change hamburger icon */

            menuToggle.textContent =
                isOpen ? "✕" : "☰";

        });


        /* Close menu when clicking outside */

        document.addEventListener("click", function (event) {

            const clickedInsideMenu =
                navMenu.contains(event.target);

            const clickedToggle =
                menuToggle.contains(event.target);


            if (
                !clickedInsideMenu &&
                !clickedToggle &&
                navMenu.classList.contains("active")
            ) {

                navMenu.classList.remove("active");

                menuToggle.setAttribute(
                    "aria-expanded",
                    "false"
                );

                menuToggle.setAttribute(
                    "aria-label",
                    "Open navigation menu"
                );

                menuToggle.textContent = "☰";
            }

        });


        /* Close menu with Escape key */

        document.addEventListener("keydown", function (event) {

            if (
                event.key === "Escape" &&
                navMenu.classList.contains("active")
            ) {

                navMenu.classList.remove("active");

                menuToggle.setAttribute(
                    "aria-expanded",
                    "false"
                );

                menuToggle.setAttribute(
                    "aria-label",
                    "Open navigation menu"
                );

                menuToggle.textContent = "☰";

            }

        });

    }


    /* =====================================================
       NAVIGATION LINKS
    ===================================================== */

    navLinks.forEach(function (link) {

        link.addEventListener("click", function () {

            /* Close mobile menu */

            if (navMenu && menuToggle) {

                navMenu.classList.remove("active");

                menuToggle.setAttribute(
                    "aria-expanded",
                    "false"
                );

                menuToggle.setAttribute(
                    "aria-label",
                    "Open navigation menu"
                );

                menuToggle.textContent = "☰";

            }

        });

    });


    /* =====================================================
       SMOOTH SCROLLING
    ===================================================== */

    document.querySelectorAll(
        'a[href^="#"]'
    ).forEach(function (link) {

        link.addEventListener("click", function (event) {

            const targetId =
                this.getAttribute("href");

            if (
                !targetId ||
                targetId === "#"
            ) {
                return;
            }

            const target =
                document.querySelector(targetId);

            if (!target) {
                return;
            }

            event.preventDefault();

            const navbar =
                document.querySelector(".navbar");

            const navbarHeight =
                navbar
                    ? navbar.offsetHeight
                    : 0;

            const targetPosition =
                target.getBoundingClientRect().top +
                window.scrollY -
                navbarHeight;

            window.scrollTo({
                top: targetPosition,
                behavior: "smooth"
            });

        });

    });


    /* =====================================================
       ACTIVE NAVIGATION LINK
    ===================================================== */

    function updateActiveNav() {

        let currentSection = "";

        const scrollPosition =
            window.scrollY +
            150;


        sections.forEach(function (section) {

            const sectionTop =
                section.offsetTop;

            const sectionHeight =
                section.offsetHeight;

            const sectionId =
                section.getAttribute("id");


            if (
                scrollPosition >= sectionTop &&
                scrollPosition <
                sectionTop + sectionHeight
            ) {

                currentSection = sectionId;

            }

        });


        navLinks.forEach(function (link) {

            link.classList.remove("active");

            const href =
                link.getAttribute("href");


            if (
                href === "#" + currentSection
            ) {

                link.classList.add("active");

            }

        });

    }


    window.addEventListener(
        "scroll",
        updateActiveNav
    );

    updateActiveNav();


    /* =====================================================
       PROJECT FILTER
    ===================================================== */

    if (
        filterButtons.length > 0 &&
        projectCards.length > 0
    ) {

        filterButtons.forEach(function (button) {

            button.addEventListener(
                "click",
                function () {

                    const filter =
                        this.getAttribute(
                            "data-filter"
                        );


                    /* Remove active */

                    filterButtons.forEach(
                        function (btn) {

                            btn.classList.remove(
                                "active"
                            );

                        }
                    );


                    /* Add active */

                    this.classList.add("active");


                    /* Filter projects */

                    projectCards.forEach(
                        function (card) {

                            const category =
                                card.getAttribute(
                                    "data-category"
                                );


                            if (
                                filter === "all" ||
                                category === filter
                            ) {

                                card.style.display =
                                    "block";

                                setTimeout(
                                    function () {

                                        card.style.opacity =
                                            "1";

                                        card.style.transform =
                                            "translateY(0)";

                                    },
                                    10
                                );

                            } else {

                                card.style.opacity =
                                    "0";

                                card.style.transform =
                                    "translateY(15px)";

                                setTimeout(
                                    function () {

                                        card.style.display =
                                            "none";

                                    },
                                    250
                                );

                            }

                        }
                    );

                }
            );

        });

    }


    /* =====================================================
       SCROLL REVEAL ANIMATION
    ===================================================== */

    const animatedElements =
        document.querySelectorAll(
            ".skill-card, " +
            ".service-card, " +
            ".project-card, " +
            ".timeline-item, " +
            ".about-card, " +
            ".contact-form"
        );


    if (
        "IntersectionObserver" in window
    ) {

        const observer =
            new IntersectionObserver(
                function (entries, observer) {

                    entries.forEach(
                        function (entry) {

                            if (
                                entry.isIntersecting
                            ) {

                                entry.target.classList.add(
                                    "show"
                                );

                                observer.unobserve(
                                    entry.target
                                );

                            }

                        }
                    );

                },
                {
                    threshold: 0.12
                }
            );


        animatedElements.forEach(
            function (element) {

                element.classList.add(
                    "reveal"
                );

                observer.observe(element);

            }
        );

    } else {

        animatedElements.forEach(
            function (element) {

                element.classList.add("show");

            }
        );

    }


    /* =====================================================
       CONTACT FORM
    ===================================================== */

    const contactForm =
        document.querySelector(
            ".contact-form"
        );


    if (contactForm) {

        contactForm.addEventListener(
            "submit",
            function (event) {

                const name =
                    document.getElementById(
                        "name"
                    );

                const email =
                    document.getElementById(
                        "email"
                    );

                const message =
                    document.getElementById(
                        "message"
                    );


                /* Basic validation */

                if (
                    !name ||
                    !email ||
                    !message
                ) {
                    return;
                }


                const nameValue =
                    name.value.trim();

                const emailValue =
                    email.value.trim();

                const messageValue =
                    message.value.trim();


                if (
                    nameValue === "" ||
                    emailValue === "" ||
                    messageValue === ""
                ) {

                    event.preventDefault();

                    alert(
                        "Please fill in all required fields."
                    );

                    return;

                }


                /* Email validation */

                const emailPattern =
                    /^[^\s@]+@[^\s@]+\.[^\s@]+$/;


                if (
                    !emailPattern.test(
                        emailValue
                    )
                ) {

                    event.preventDefault();

                    alert(
                        "Please enter a valid email address."
                    );

                    email.focus();

                    return;

                }

            }
        );

    }


    /* =====================================================
       BACK TO TOP
    ===================================================== */

    const backToTop =
        document.querySelector(
            ".back-to-top"
        );


    if (backToTop) {

        backToTop.addEventListener(
            "click",
            function (event) {

                event.preventDefault();

                window.scrollTo({
                    top: 0,
                    behavior: "smooth"
                });

            }
        );

    }


    /* =====================================================
       NAVBAR SHADOW ON SCROLL
    ===================================================== */

    const navbar =
        document.querySelector(".navbar");


    function updateNavbar() {

        if (!navbar) {
            return;
        }


        if (window.scrollY > 50) {

            navbar.classList.add(
                "navbar-scrolled"
            );

        } else {

            navbar.classList.remove(
                "navbar-scrolled"
            );

        }

    }


    window.addEventListener(
        "scroll",
        updateNavbar
    );

    updateNavbar();


    /* =====================================================
       PREVENT EMPTY # LINKS
    ===================================================== */

    document.querySelectorAll(
        'a[href="#"]'
    ).forEach(function (link) {

        link.addEventListener(
            "click",
            function (event) {

                event.preventDefault();

            }
        );

    });


    /* =====================================================
       TYPING EFFECT
       Hero "Web Developer"
    ===================================================== */

    const heroTitle =
        document.querySelector(
            ".hero h2"
        );


    if (heroTitle) {

        const originalText =
            heroTitle.textContent.trim();


        let characterIndex = 0;

        heroTitle.textContent = "";


        function typeText() {

            if (
                characterIndex <
                originalText.length
            ) {

                heroTitle.textContent +=
                    originalText.charAt(
                        characterIndex
                    );

                characterIndex++;

                setTimeout(
                    typeText,
                    80
                );

            }

        }


        setTimeout(
            typeText,
            500
        );

    }


    /* =====================================================
       IMAGE FALLBACK
    ===================================================== */

    const profileImage =
        document.querySelector(
            ".image-container img"
        );


    if (profileImage) {

        profileImage.addEventListener(
            "error",
            function () {

                this.style.display = "none";

                const container =
                    this.parentElement;

                if (container) {

                    container.style.background =
                        "linear-gradient(135deg, #7c3aed, #06b6d4)";

                    container.style.borderRadius =
                        "50%";

                }

            }
        );

    }


    /* =====================================================
       CURRENT YEAR
       Optional automatic footer year
    ===================================================== */

    const currentYear =
        document.querySelector(
            ".footer-bottom p"
        );


    if (currentYear) {

        const year =
            new Date().getFullYear();

        currentYear.innerHTML =
            currentYear.innerHTML.replace(
                /\b20\d{2}\b/,
                year
            );

    }


    /* =====================================================
       CONSOLE MESSAGE
    ===================================================== */

    console.log(
        "%cAmina Iftikhar | Web Developer",
        "color:#a78bfa;font-size:18px;font-weight:bold;"
    );

    console.log(
        "%cPortfolio loaded successfully!",
        "color:#06b6d4;font-size:14px;"
    );

});
