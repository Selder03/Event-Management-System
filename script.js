function loadContent(page, element) {
    fetch(page)
        .then(response => response.text())
        .then(data => {
            document.getElementById('event-content').innerHTML = data;

            // Remove 'active' class from all tabs
            document.querySelectorAll('.tab').forEach(tab => tab.classList.remove('active'));

            // Add 'active' class to the clicked tab
            element.classList.add('active');
        })
        .catch(error => console.error('Error loading the page:', error));
}

// Load "Upcoming" events by default when the page loads
window.onload = () => loadContent('upcoming.html', document.querySelector('.tab'));


// for creating event
document.getElementById('eventForm')?.addEventListener('submit', function(event) {
    event.preventDefault();
    alert('Event Posted Successfully!');
});

function cancelForm() {
    document.getElementById('eventForm').reset();
}


document.addEventListener("DOMContentLoaded", function() {
    const searchInput = document.querySelector(".search-bar");
    const faqItems = document.querySelectorAll(".faq-box");

    searchInput.addEventListener("input", function() {
        const searchTerm = searchInput.value.toLowerCase();

        faqItems.forEach(item => {
            if (item.textContent.toLowerCase().includes(searchTerm)) {
                item.style.display = "block";
            } else {
                item.style.display = "none";
            }
        });
    });
});


function switchTab(tab) {
    document.getElementById("attending-content").style.display = tab === 'attending' ? 'block' : 'none';
    document.getElementById("organizing-content").style.display = tab === 'organizing' ? 'block' : 'none';

    // Update active tab styling
    document.getElementById("attending-tab").classList.toggle("active", tab === 'attending');
    document.getElementById("organizing-tab").classList.toggle("active", tab === 'organizing');
}

// Ensure the default tab loads
document.addEventListener("DOMContentLoaded", function() {
    switchTab('attending'); // Default to 'Attending an event' tab
});

//Profile icon
function toggleProfileMenu() {
    var menu = document.getElementById("profile-menu");
    menu.classList.toggle("show"); // Toggle visibility
}

// Close menu when clicking outside
document.addEventListener("click", function(event) {
    var menu = document.getElementById("profile-menu");
    var icon = document.querySelector(".profile-icon img");

    if (!menu.contains(event.target) && !icon.contains(event.target)) {
        menu.classList.remove("show");
    }
});







