import "./bootstrap";
// ===== BACK TO TOP =====
const backToTop = document.createElement("button");
backToTop.id = "backToTop";
backToTop.innerHTML = "&#8679;";
document.body.appendChild(backToTop);
backToTop.addEventListener("click", () =>
    window.scrollTo({ top: 0, behavior: "smooth" }),
);

// ===== TOAST =====
const toast = document.createElement("div");
toast.id = "toast";
document.body.appendChild(toast);
function showToast(msg) {
    toast.textContent = msg;
    toast.classList.add("show");
    setTimeout(() => toast.classList.remove("show"), 2200);
}

// ===== HEADER SCROLL =====
const header = document.querySelector(".header");
window.addEventListener("scroll", () => {
    if (window.scrollY > 60) {
        header && header.classList.add("scrolled");
        backToTop.classList.add("show");
    } else {
        header && header.classList.remove("scrolled");
        backToTop.classList.remove("show");
    }
});

// ===== SCROLL REVEAL =====
function initReveal() {
    const elements = document.querySelectorAll("[data-reveal]");
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("visible");
                    observer.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.12 },
    );
    elements.forEach((el) => {
        const dir = el.dataset.reveal || "up";
        el.classList.add("reveal", "reveal-" + dir);
        el.style.transitionDelay = (el.dataset.delay || 0) + "ms";
        observer.observe(el);
    });
}

// ===== SLIDER WITH DOTS =====
function initSlider() {
    const slider = document.querySelector(".slider");
    if (!slider) return;
    const slides = document.querySelectorAll(".myslider");
    if (!slides.length) return;
    const dotsWrap = document.createElement("div");
    dotsWrap.className = "slider-dots";
    slides.forEach((_, i) => {
        const dot = document.createElement("span");
        dot.className = "slider-dot" + (i === 0 ? " active-dot" : "");
        dot.addEventListener("click", () => {
            window.chiSo = i + 1;
            window.showSlide(window.chiSo);
        });
        dotsWrap.appendChild(dot);
    });
    slider.appendChild(dotsWrap);
    window.chiSo = 1;
    function updateDots(n) {
        document.querySelectorAll(".slider-dot").forEach((d, i) => {
            d.classList.toggle("active-dot", i === n - 1);
        });
    }
    window.showSlide = function (n) {
        if (n > slides.length) window.chiSo = 1;
        if (n < 1) window.chiSo = slides.length;
        slides.forEach((s) => {
            s.style.display = "none";
            s.style.opacity = 0;
        });
        const current = slides[window.chiSo - 1];
        current.style.display = "block";
        setTimeout(() => {
            current.style.transition = "opacity 0.6s";
            current.style.opacity = 1;
        }, 10);
        updateDots(window.chiSo);
    };
    window.plusSlides = function (n) {
        window.chiSo += n;
        window.showSlide(window.chiSo);
    };
    window.showSlide(1);
    setInterval(() => window.plusSlides(1), 3500);
}

// ===== PRODUCT TOAST =====
function initProductToast() {
    document.querySelectorAll(".productviewitem-new").forEach((card) => {
        card.addEventListener("mouseenter", () => {
            const name = card.querySelector(".productview-name");
            if (name) showToast("☕ " + name.textContent.trim());
        });
    });
}

// ===== COUNTER ANIMATION =====
function animateCounter(el, target) {
    let start = 0;
    const suffix = el.dataset.suffix || "";
    const step = target / (1500 / 16);
    const timer = setInterval(() => {
        start += step;
        if (start >= target) {
            el.textContent = target + suffix;
            clearInterval(timer);
        } else {
            el.textContent = Math.floor(start) + suffix;
        }
    }, 16);
}
function initCounters() {
    const counters = document.querySelectorAll("[data-counter]");
    if (!counters.length) return;
    const obs = new IntersectionObserver(
        (entries) => {
            entries.forEach((e) => {
                if (e.isIntersecting) {
                    animateCounter(
                        e.target,
                        parseInt(e.target.dataset.counter),
                    );
                    obs.unobserve(e.target);
                }
            });
        },
        { threshold: 0.5 },
    );
    counters.forEach((c) => obs.observe(c));
}

// ===== PARALLAX =====
function initParallax() {
    const bg = document.querySelector(".welcome");
    if (!bg) return;
    window.addEventListener("scroll", () => {
        bg.style.backgroundPositionY =
            "calc(center + " + window.scrollY * 0.25 + "px)";
    });
}

// ===== CONTACT FORM =====
function initContactForm() {
    const btn = document.querySelector(".contact-form-btn");
    if (!btn) return;
    btn.addEventListener("click", (e) => {
        e.preventDefault();
        const inputs = document.querySelectorAll(".contact-form-input");
        let ok = true;
        inputs.forEach((inp) => {
            if (!inp.value.trim()) {
                inp.style.borderColor = "#e74c3c";
                ok = false;
            } else {
                inp.style.borderColor = "";
            }
        });
        if (ok) {
            showToast("✅ Gửi thông tin thành công!");
            inputs.forEach((inp) => (inp.value = ""));
        } else {
            showToast("⚠️ Vui lòng điền đầy đủ thông tin");
        }
    });
}

// ===== RIPPLE =====
function initRipple() {
    document
        .querySelectorAll(".contact-form-btn, .about-conten1-trangchu")
        .forEach((btn) => {
            btn.addEventListener("click", function (e) {
                const circle = document.createElement("span");
                const d = Math.max(this.clientWidth, this.clientHeight);
                circle.style.cssText = `position:absolute;border-radius:50%;width:${d}px;height:${d}px;left:${e.clientX - this.getBoundingClientRect().left - d / 2}px;top:${e.clientY - this.getBoundingClientRect().top - d / 2}px;background:rgba(255,255,255,0.35);transform:scale(0);animation:ripple 0.55s linear;pointer-events:none;`;
                this.style.position = "relative";
                this.style.overflow = "hidden";
                this.appendChild(circle);
                setTimeout(() => circle.remove(), 600);
            });
        });
    const s = document.createElement("style");
    s.textContent =
        "@keyframes ripple{ to{ transform:scale(2.5); opacity:0; } }";
    document.head.appendChild(s);
}

// ===== HEADER SHRINK =====
function initHeaderShrink() {
    const headerList = document.querySelector(".header-list");
    if (!headerList) return;
    window.addEventListener("scroll", () => {
        if (window.scrollY > 80) {
            headerList.style.paddingTop = "4px";
            headerList.style.paddingBottom = "4px";
        } else {
            headerList.style.paddingTop = "";
            headerList.style.paddingBottom = "";
        }
    });
}

// ===== IMAGE FADE =====
function initLazyImages() {
    document.querySelectorAll("img").forEach((img) => {
        img.style.transition = "opacity 0.5s";
        if (!img.complete) {
            img.style.opacity = 0;
            img.addEventListener("load", () => (img.style.opacity = 1));
        }
    });
}

// ===== INIT =====
document.addEventListener("DOMContentLoaded", () => {
    initSlider();
    initReveal();
    initProductToast();
    initCounters();
    initParallax();
    initContactForm();
    initRipple();
    initHeaderShrink();
    initLazyImages();
});
