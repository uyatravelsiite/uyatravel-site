document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contact-form');
    const statusContainer = document.querySelector('.status-container');
    const statusMessage = document.getElementById('status-message');

    // Function to show the status message
    function showStatusMessage(message, isError = false) {
        statusMessage.textContent = message;
        statusContainer.style.display = 'block';
        if (isError) {
            statusMessage.style.color = 'red';
        } else {
            statusMessage.style.color = 'green';
        }
    }

    // Function to hide the status container
    function hideStatusContainer() {
        statusContainer.style.display = 'none';
    }

    contactForm.addEventListener('submit', function(event) {
        event.preventDefault();

        const formData = new FormData(contactForm);

        fetch('process_contact.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                showStatusMessage('Form submitted successfully.');
                setTimeout(function() {
                    hideStatusContainer();
                    window.location.href = 'indexsite.php';
                }, 2000);
            } else {
                showStatusMessage('Error submitting the form. Please try again later.', true);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            showStatusMessage('An error occurred while processing the form. Please try again later.', true);
        });
    });
});
