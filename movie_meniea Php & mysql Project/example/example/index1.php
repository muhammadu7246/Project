
<!DOCTYPE html>
<html>

<head>
    <title>Movie Ticket Booking</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .seat-grid {
            display: grid;
            grid-template-columns: repeat(10, 1fr);
            gap: 10px;
        }

        .seat {
            width: 30px;
            height: 30px;
            background-color: #ccc;
            border: 1px solid #ddd;
            text-align: center;
            cursor: pointer;
        }

        .seat.occupied {
            background-color: #f00;
            cursor: not-allowed;
        }

        .seat.selected {
            background-color: #0f0;
        }
    </style>
</head>

<body>
    <main>
        <h1>Venus</h1>
        <p>Monday, September 9, 2024 | 5:00 PM</p>
        <p>City Walk English 20</p>

        <h2>Screen: Silver Plus</h2>
        <div class="seat-grid"></div>

        <form id="reservation-form" action="reserve.php" method="POST">
            <input type="hidden" name="selectedSeats" id="selectedSeatsInput">
            <p>Selected Seats:</p>
            <p id="selected-seats"></p>
            <p>Total Price: <span id="total-price">$0</span></p>
            <button type="submit" id="reserve-button">Proceed to Checkout</button>
        </form>
    </main>

    <script>
        const seatGrid = document.querySelector('.seat-grid');
        const selectedSeats = document.getElementById('selected-seats');
        const totalPriceElement = document.getElementById('total-price');
        const reserveButton = document.getElementById('reserve-button');
        const selectedSeatsInput = document.getElementById('selectedSeatsInput');
        const seatPrice = 150;

        // Generate the seat grid
        for (let i = 0; i < 100; i++) {
            const seat = document.createElement('div');
            seat.classList.add('seat');
            seat.textContent = (i + 1).toString().padStart(2, '0');
            seatGrid.appendChild(seat);
        }

        const seats = document.querySelectorAll('.seat');
        seats.forEach(seat => {
            seat.addEventListener('click', () => {
                if (!seat.classList.contains('occupied')) {
                    seat.classList.toggle('selected');
                    updateSelectedSeats();
                }
            });
        });

        function updateSelectedSeats() {
            const selectedSeatsArray = Array.from(seats).filter(seat => seat.classList.contains('selected'));
            const selectedSeatsText = selectedSeatsArray.map(seat => seat.textContent).join(', ');
            selectedSeats.textContent = selectedSeatsText;
            selectedSeatsInput.value = selectedSeatsText;  // Add selected seats to hidden input
            updateTotalPrice();
        }

        function updateTotalPrice() {
            const selectedSeatsArray = Array.from(seats).filter(seat => seat.classList.contains('selected'));
            const totalPrice = selectedSeatsArray.length * seatPrice;
            totalPriceElement.textContent = `$${totalPrice}`;
        }
    </script>
</body>

</html>
