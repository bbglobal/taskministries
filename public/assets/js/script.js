// Get all the <h5> elements
const h5Elements = document.querySelectorAll('h5');

// Loop through each <h5> element and add a click event listener
h5Elements.forEach((h5) => {
    h5.addEventListener('click', function () {
        // Get the next <ul> element after the clicked <h5>
        const ul = this.nextElementSibling;

        // Toggle the visibility by changing the "display" style property
        if (ul.style.display === 'none' || ul.style.display === '') {
            ul.style.display = 'block'; // Show the <ul> element
        } else {
            ul.style.display = 'none'; // Hide the <ul> element
        }
    });
});

const enrollForm = document.getElementById('enroll-form');
const haLogoWrapper = document.querySelectorAll('.ha-logo-wrapper figure');
const h3 = document.querySelector('#enroll-form h3');

haLogoWrapper.forEach(element => {
    element.addEventListener('click', () => {
        const img = element.querySelector('a img');
        if (img) {
            const title = img.getAttribute('title') || img.getAttribute('alt') || 'Default Title';
            h3.textContent = `Enroll Now at the Apostolic Hub in ${title}`;
        } else {
            h3.textContent = 'Image not found';
        }
    });
});

// Get references to the radio buttons and the <p> tag
const studentRadio = document.getElementById("student");
const instructorRadio = document.getElementById("instructor");
const select = document.getElementById("select");
const file = document.getElementById("file");

// Add event listeners to the radio buttons
studentRadio.addEventListener("change", function () {
    if (studentRadio.checked) {
        select.style.display = "none";
        file.style.display = "none";
    }
});

instructorRadio.addEventListener("change", function () {
    if (instructorRadio.checked) {
        select.style.display = "inline";
        file.style.display = "inline";
    }
});


