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
        { question: "How to reset my password?", answer: "To reset your password, go to the settings page and click on 'Reset Password'." },
        { question: "How to contact support?", answer: "You can contact support via the 'Contact Us' page or email us at support@example.com." },
        { question: "How to update my profile?", answer: "Go to the profile page and click 'Edit Profile' to update your details." }
    ];

    // Search functionality
    searchBar.addEventListener('input', function() {
        const query = searchBar.value.toLowerCase();
        const results = helpContent.filter(item => item.question.toLowerCase().includes(query));

        searchResults.innerHTML = results.map(item =>
            `<div class="search-result">
                <strong>${item.question}</strong>
                <p>${item.answer}</p>
            </div>`
        ).join('');

        if (results.length === 0) {
            searchResults.innerHTML = '<div class="search-result">No results found.</div>';
        }
    });

    // Close help center on outside click
    document.addEventListener('click', function(event) {
        if (!helpCenter.contains(event.target) && !helpBtn.contains(event.target)) {
            helpCenter.classList.add('hidden');
        }
    });
});
