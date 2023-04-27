/*
Calculates the height of the scanner.
In some browsers, problems may occur when using 100vh as the screen height for full-screen work.
To solve this problem, "height: (calc(var(--vh, 1vh) * 100))" is used on the css side.
*/

function appHeight() {
    const e = document.documentElement;
    e.style.setProperty("--vh", .01 * window.innerHeight + "px")
}
window.addEventListener("resize", appHeight), appHeight();