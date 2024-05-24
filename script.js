document.addEventListener('DOMContentLoaded', function() { // Wait for the DOM to be fully loaded
    document.querySelectorAll('.btn_1, .btn_2, .nav-link, .dropdown-toggle').forEach(function(element) { // Select all elements with the class 'btn_1', 'btn_2', 'nav-link' or 'dropdown-toggle' and attach a click event listener to each of them
        element.addEventListener('click', function() { // Listen for the click event
            console.log('Element clicked:', element.textContent.trim()); // Log the clicked element's text content to the console
        });

        element.addEventListener('keydown', function(event) { // Listen for the keydown event
            if (event.key === 'Enter' || event.key === ' ') { // Check if the key is 'Enter' or 'Space'
                event.preventDefault(); // Prevent the default action to avoid unexpected behavior
                element.click(); // Simulate the click event
            }
        });
    });
});

