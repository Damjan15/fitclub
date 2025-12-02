import "./bootstrap";

document.addEventListener("DOMContentLoaded", () => {
    const mobileMenu = document.getElementById("mobile-menu");
    const menuButton = document.getElementById("mobile-menu-button");
    const closeButton = document.getElementById("mobile-menu-close");
    const navLinks = mobileMenu.querySelectorAll("a");

    // Function to toggle the menu state
    const toggleMenu = (show) => {
        if (show) {
            // Show menu
            mobileMenu.classList.remove("translate-x-full");
            mobileMenu.classList.add("translate-x-0");
            document.body.style.overflow = "hidden"; // Prevent scrolling when menu is open
        } else {
            // Hide menu
            mobileMenu.classList.remove("translate-x-0");
            mobileMenu.classList.add("translate-x-full");
            document.body.style.overflow = ""; // Restore scrolling
        }
    };

    // Event listener for opening the menu
    menuButton.addEventListener("click", () => {
        toggleMenu(true);
    });

    // Event listener for closing the menu
    closeButton.addEventListener("click", () => {
        toggleMenu(false);
    });

    // Event listeners for closing the menu when a link is clicked
    navLinks.forEach((link) => {
        link.addEventListener("click", () => {
            toggleMenu(false);
        });
    });

    // ====== FAQ ACCORDION ======
    const faqContainer = document.getElementById("faq-container");
    if (faqContainer) {
        const faqHeaders = faqContainer.querySelectorAll(".faq-header");

        faqHeaders.forEach((header) => {
            header.addEventListener("click", () => {
                const faqItem = header.closest("[data-faq-item]");
                const content = faqItem.querySelector(".faq-content");

                const isExpanded =
                    header.getAttribute("aria-expanded") === "true";

                // Toggle state
                if (isExpanded) {
                    // Collapse (Closing)
                    content.style.maxHeight = 0;
                    header.setAttribute("aria-expanded", "false");
                } else {
                    // Set max-height to the scroll height to allow smooth transition
                    content.style.maxHeight = content.scrollHeight + "px";
                    header.setAttribute("aria-expanded", "true");
                }
            });
        });
    }

    // ====== SCROLL TO TOP ======
    const scrollBtn = document.getElementById("scrollToTopBtn");
    window.addEventListener("scroll", () => {
        if (window.scrollY > 400) {
            scrollBtn.classList.remove("opacity-0", "pointer-events-none");
        } else {
            scrollBtn.classList.add("opacity-0", "pointer-events-none");
        }
    });

    scrollBtn.addEventListener("click", () => {
        window.scrollTo({ top: 0, behavior: "smooth" });
    });
});
