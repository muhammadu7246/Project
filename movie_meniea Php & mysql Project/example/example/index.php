<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seat Reservation</title>
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #0a0a23;
            color: #fff;
            text-align: center;
        }

        .movie-info {
            margin: 20px 0;
        }

        .screen {
            margin: 20px 0;
            background-color: #333;
            padding: 10px;
            border-radius: 5px;
        }

        .seats {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .seat-row {
            display: flex;
            justify-content: center;
            margin-bottom: 10px;
        }

        .seat {
            width: 40px;
            height: 40px;
            margin: 5px;
            background-color: #444;
            border: none;
            color: white;
            cursor: pointer;
            border-radius: 5px;
            font-size: 14px;
        }

        .seat:hover {
            background-color: #6feaf6;
        }

        .seat.selected {
            background-color: #6feaf6;
        }

        .seat.reserved {
            background-color: #e74c3c;
            cursor: not-allowed;
        }

        .selected-seats {
            margin-top: 20px;
            background-color: #1c1c3c;
            padding: 20px;
            border-radius: 5px;
        }

        button#proceed {
            background-color: #27ae60;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }

        button#proceed:hover {
            background-color: #2ecc71;
        }
    </style>
</head>

<body>

    <div class="movie-info">
        <h2>Venus</h2>
        <p>City Walk | English - 2D</p>
        <p>Monday, Sep 09, 2024</p>
        <p>09:40 AM</p>
    </div>

    <div class="screen">
        <p>SCREEN</p>
    </div>

    <div class="seats">
        <div class="seat-row">
            <button class="seat" id="A1" data-price="10">A1</button>
            <button class="seat reserved" id="A2" disabled>A2</button>
            <button class="seat" id="A3" data-price="10">A3</button>
            <button class="seat" id="A4" data-price="10">A4</button>
        </div>
        <!-- Add more rows as needed -->
    </div>

    <div class="selected-seats">
        <h3>You Have Chosen:</h3>
        <ul id="selected-seats-list">
            <!-- Selected seats will be listed here dynamically -->
        </ul>
        <p>Total Price: $<span id="total-price">0</span></p>
        <button id="proceed">Proceed</button>
    </div>

    <script>
        const seats = document.querySelectorAll('.seat:not(.reserved)');
        const selectedSeatsList = document.getElementById('selected-seats-list');
        const totalPriceElement = document.getElementById('total-price');
        let selectedSeats = [];
        let totalPrice = 0;

        // Event listener for selecting seats
        seats.forEach(seat => {
            seat.addEventListener('click', function () {
                const seatId = this.id;
                const seatPrice = parseFloat(this.getAttribute('data-price'));

                if (!this.classList.contains('selected')) {
                    // Select seat
                    this.classList.add('selected');
                    selectedSeats.push({ id: seatId, price: seatPrice });
                    totalPrice += seatPrice;
                } else {
                    // Deselect seat
                    this.classList.remove('selected');
                    selectedSeats = selectedSeats.filter(seat => seat.id !== seatId);
                    totalPrice -= seatPrice;
                }

                updateSelectedSeats();
            });
        });

        // Update the list of selected seats and total price
        function updateSelectedSeats() {
            selectedSeatsList.innerHTML = '';

            selectedSeats.forEach(seat => {
                const li = document.createElement('li');
                li.textContent = seat.id;
                selectedSeatsList.appendChild(li);
            });

            totalPriceElement.textContent = totalPrice.toFixed(2);
        }

        // Event listener for proceed button
        document.getElementById('proceed').addEventListener('click', function () {
            if (selectedSeats.length === 0) {
                alert('Please select at least one seat.');
                return;
            }

            // Handle reservation logic here (without AJAX or PHP/MySQL)
            // For example, you could use local storage or cookies to store the selected seats and total price.
            // You could also implement client-side validation or other features as needed.
            // Here's a basic example using local storage:
            localStorage.setItem('selectedSeats', JSON.stringify(selectedSeats));
            localStorage.setItem('totalPrice', totalPrice);
            alert('Reservation successful! Selected seats and total price are stored in local storage.');
        });
    </script>

</body>

</html>