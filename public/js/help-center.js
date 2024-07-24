// scripts.js
document.addEventListener('DOMContentLoaded', function() {
    const helpBtn = document.getElementById('helpBtn');
    const helpCenter = document.getElementById('helpCenter');
    const searchBar = document.getElementById('searchBar');
    const searchResults = document.getElementById('searchResults');

    // Toggle Help Center visibility
    helpBtn.addEventListener('click', function() {
        helpCenter.classList.toggle('hidden');
    });

    // Sample help content
    const helpContent = [
        {
            question: "How to reset my password?",
            answer: "To reset your password, go to the settings page and click on 'Reset Password'."
        },
        {
            question: "How to contact support?",
            answer: "You can contact support via the 'Contact Us' page or email us at support@example.com."
        },
        {
            question: "How to update my profile?",
            answer: "Go to the profile page and click 'Edit Profile' to update your details."
        },
        {
            question: "How to check my order status?",
            answer: "To check your order status, go to the 'Orders' page and find the order you want to track."
        },
        {
            question: "How to view my order history?",
            answer: "You can view your order history by going to the 'Orders' page and selecting 'Order History'."
        },
        {
            question: "When was my password last changed?",
            answer: "To see when your password was last changed, go to the settings page and check the 'Password History' section."
        }
    ];

    // Display search results
    function displayResults(results) {
        searchResults.innerHTML = results.length ?
            results.map(item =>
                `<div class="search-result" data-answer="${item.answer}">
                    <strong>${item.question}</strong>
                </div>`
            ).join('') :
            '<div class="search-result">Sorry, no results found.</div>';
    }

    // Search functionality
    searchBar.addEventListener('input', function() {
        const query = searchBar.value.toLowerCase();
        const results = helpContent.filter(item => item.question.toLowerCase().includes(query));
        displayResults(results);
    });

    // Show answer on click
    searchResults.addEventListener('click', function(event) {
        if (event.target && event.target.classList.contains('search-result')) {
            const answer = event.target.getAttribute('data-answer');
            alert(answer); // Replace with your desired action
        }
    });

    // Close help center on outside click
    document.addEventListener('click', function(event) {
        if (!helpCenter.contains(event.target) && !helpBtn.contains(event.target)) {
            helpCenter.classList.add('hidden');
        }
    });
});
