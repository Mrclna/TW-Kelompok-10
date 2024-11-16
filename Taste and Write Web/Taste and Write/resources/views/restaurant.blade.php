@extends('templates/main')

@section('content')
    <section id="restaurants">
        <div class="restaurants-container">
            <h2>Available Restaurants</h2>
            <div class="restaurant-grid">
                <!-- Restoran 1 -->
                <div class="restaurant-card">
                    <img src="images/restaurant1.jpg" alt="Restaurant 1">
                    <h3>Italian Bistro</h3>
                    <p>Authentic Italian cuisine in a cozy setting. Pasta, pizza, and more.</p>
                </div>
                <!-- Restoran 2 -->
                <div class="restaurant-card">
                    <img src="images/restaurant2.jpg" alt="Restaurant 2">
                    <h3>Sushi World</h3>
                    <p>Fresh sushi and sashimi made to order. A taste of Japan in your city.</p>
                </div>
                <!-- Restoran 3 -->
                <div class="restaurant-card">
                    <img src="images/restaurant3.jpg" alt="Restaurant 3">
                    <h3>Grill Master</h3>
                    <p>Perfectly grilled steaks and burgers, served hot and fresh.</p>
                </div>
                <!-- Tambahkan lebih banyak restoran di sini -->
            </div>
        </div>
    </section>
@endsection
