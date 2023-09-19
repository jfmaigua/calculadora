

    // Function to fetch user data by ID and populate the modal
    function fetchUserById(userId) {

        const authToken = window.authToken;
        fetch('http://localhost:4000/users/' + userId, {
            method: 'GET',
            headers: {
                'Authorization': 'Bearer ' + authToken,
            },
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            // Populate modal fields with user data
            document.getElementById('editFullName').value = data.fullName;
            document.getElementById('editEmail').value = data.email;
            document.getElementById('editRol').value = data.rol;
            document.getElementById('editCellphone').value = data.cellphone;
            // Show the modal
            document.getElementById('editUserModal').style.display = 'block';
        })
        .catch(error => {
            console.error('Error fetching user data:', error);
        });
    }

    // Function to update user data
    function updateUser(userId) {
        var fullName = document.getElementById('editFullName').value;
        var email = document.getElementById('editEmail').value;
        var rol = document.getElementById('editRol').value;
        var cellphone = document.getElementById('editCellphone').value;

        var userData = {
            fullName: fullName,
            email: email,
            rol: rol,
            cellphone: cellphone
            // Add other fields as needed
        };

        fetch('http://localhost:4000/users/' + userId, {
            method: 'PUT',
            headers: {
                'Authorization': 'Bearer ' + authToken,
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(userData),
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            // Close the modal
            document.getElementById('editUserModal').style.display = 'none';
            // You can add a success message or perform other actions here
        })
        .catch(error => {
            console.error('Error updating user data:', error);
            // Handle the error and display a message if needed
        });
    }

    // Event listener for the "Editar" buttons
    var editButtons = document.querySelectorAll('.edit-user');
    editButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            var userId = button.getAttribute('data-id');
            fetchUserById(userId, '<?php echo $token; ?>');
        });
    });

    // Event listener for the "Guardar cambios" button
    var saveButton = document.getElementById('saveChangesButton');
    saveButton.addEventListener('click', function () {
        var userId = 
        updateUser(userId, '<?php echo $token; ?>');
    });

