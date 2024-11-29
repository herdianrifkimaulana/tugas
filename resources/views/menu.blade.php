@extends('layouts.app')
@extends('layouts.navbar')

@section('content')
<div class="menu-container">
    <h2 class="menu-title">Our Menu</h2>
    <div class="menu-items">
        <!-- Item 1 -->
        <div class="menu-item">
            <img src="path/to/image1.jpg" alt="Menu Item 1" class="menu-img">
            <div class="menu-info">
                <h3 class="menu-name">Burger Classic</h3>
                <p class="menu-description">A delicious classic burger with fresh ingredients.</p>
                <span class="menu-price">$10.99</span>
                <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="1">
                    <input type="hidden" name="name" value="Burger Classic">
                    <input type="hidden" name="price" value="10.99">
                    <input type="hidden" name="quantity" value="1">
                    <button type="submit" class="btn btn-order">Order Now</button>
                </form>
            </div>
        </div>
        <!-- Item 2 -->
        <div class="menu-item">
            <img src="path/to/image2.jpg" alt="Menu Item 2" class="menu-img">
            <div class="menu-info">
                <h3 class="menu-name">Cheese Fries</h3>
                <p class="menu-description">Crispy fries topped with melted cheese.</p>
                <span class="menu-price">$5.99</span>
                <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="2">
                    <input type="hidden" name="name" value="Cheese Fries">
                    <input type="hidden" name="price" value="5.99">
                    <input type="hidden" name="quantity" value="1">
                    <button type="submit" class="btn btn-order">Order Now</button>
                </form>
            </div>
        </div>
        <!-- Item 3 -->
        <div class="menu-item">
            <img src="path/to/image3.jpg" alt="Menu Item 3" class="menu-img">
            <div class="menu-info">
                <h3 class="menu-name">Grilled Chicken Sandwich</h3>
                <p class="menu-description">Juicy grilled chicken with a soft bun and fresh veggies.</p>
                <span class="menu-price">$8.99</span>
                <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="3">
                    <input type="hidden" name="name" value="Grilled Chicken Sandwich">
                    <input type="hidden" name="price" value="8.99">
                    <input type="hidden" name="quantity" value="1">
                    <button type="submit" class="btn btn-order">Order Now</button>
                </form>
            </div>
        </div>
        <!-- Item 4 -->
        <div class="menu-item">
            <img src="path/to/image4.jpg" alt="Menu Item 4" class="menu-img">
            <div class="menu-info">
                <h3 class="menu-name">Spicy Wings</h3>
                <p class="menu-description">Hot and spicy wings for a perfect appetizer.</p>
                <span class="menu-price">$7.49</span>
                <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="4">
                    <input type="hidden" name="name" value="Spicy Wings">
                    <input type="hidden" name="price" value="7.49">
                    <input type="hidden" name="quantity" value="1">
                    <button type="submit" class="btn btn-order">Order Now</button>
                </form>
            </div>
        </div>
        <!-- Item 5 -->
        <div class="menu-item">
            <img src="path/to/image5.jpg" alt="Menu Item 5" class="menu-img">
            <div class="menu-info">
                <h3 class="menu-name">Veggie Burger</h3>
                <p class="menu-description">A fresh and tasty veggie burger with a savory patty.</p>
                <span class="menu-price">$9.49</span>
                <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="5">
                    <input type="hidden" name="name" value="Veggie Burger">
                    <input type="hidden" name="price" value="9.49">
                    <input type="hidden" name="quantity" value="1">
                    <button type="submit" class="btn btn-order">Order Now</button>
                </form>
            </div>
        </div>
        <!-- Item 6 -->
        <div class="menu-item">
            <img src="path/to/image6.jpg" alt="Menu Item 6" class="menu-img">
            <div class="menu-info">
                <h3 class="menu-name">Fish Tacos</h3>
                <p class="menu-description">Fresh fish tacos with a zesty dressing.</p>
                <span class="menu-price">$11.99</span>
                <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="6">
                    <input type="hidden" name="name" value="Fish Tacos">
                    <input type="hidden" name="price" value="11.99">
                    <input type="hidden" name="quantity" value="1">
                    <button type="submit" class="btn btn-order">Order Now</button>
                </form>
            </div>
        </div>
        <!-- Item 7 -->
        <div class="menu-item">
            <img src="path/to/image7.jpg" alt="Menu Item 7" class="menu-img">
            <div class="menu-info">
                <h3 class="menu-name">Cheeseburger Deluxe</h3>
                <p class="menu-description">A deluxe cheeseburger with extra cheese and pickles.</p>
                <span class="menu-price">$12.99</span>
                <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="7">
                    <input type="hidden" name="name" value="Cheeseburger Deluxe">
                    <input type="hidden" name="price" value="12.99">
                    <input type="hidden" name="quantity" value="1">
                    <button type="submit" class="btn btn-order">Order Now</button>
                </form>
            </div>
        </div>
        <!-- Item 8 -->
        <div class="menu-item">
            <img src="path/to/image8.jpg" alt="Menu Item 8" class="menu-img">
            <div class="menu-info">
                <h3 class="menu-name">BBQ Ribs</h3>
                <p class="menu-description">Tender BBQ ribs served with fries.</p>
                <span class="menu-price">$14.99</span>
                <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="8">
                    <input type="hidden" name="name" value="BBQ Ribs">
                    <input type="hidden" name="price" value="14.99">
                    <input type="hidden" name="quantity" value="1">
                    <button type="submit" class="btn btn-order">Order Now</button>
                </form>
            </div>
        </div>
        <!-- Item 9 -->
        <div class="menu-item">
            <img src="path/to/image9.jpg" alt="Menu Item 9" class="menu-img">
            <div class="menu-info">
                <h3 class="menu-name">Pasta Carbonara</h3>
                <p class="menu-description">Creamy pasta with bacon and parmesan.</p>
                <span class="menu-price">$13.49</span>
                <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="9">
                    <input type="hidden" name="name" value="Pasta Carbonara">
                    <input type="hidden" name="price" value="13.49">
                    <input type="hidden" name="quantity" value="1">
                    <button type="submit" class="btn btn-order">Order Now</button>
                </form>
            </div>
        </div>
        <!-- Item 10 -->
        <div class="menu-item">
            <img src="path/to/image10.jpg" alt="Menu Item 10" class="menu-img">
            <div class="menu-info">
                <h3 class="menu-name">Chicken Caesar Salad</h3>
                <p class="menu-description">Crisp lettuce with grilled chicken and Caesar dressing.</p>
                <span class="menu-price">$9.99</span>
                <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="10">
                    <input type="hidden" name="name" value="Chicken Caesar Salad">
                    <input type="hidden" name="price" value="9.99">
                    <input type="hidden" name="quantity" value="1">
                    <button type="submit" class="btn btn-order">Order Now</button>
                </form>
            </div>
        </div>
        <!-- Item 11 -->
        <div class="menu-item">
            <img src="path/to/image11.jpg" alt="Menu Item 11" class="menu-img">
            <div class="menu-info">
                <h3 class="menu-name">Margarita Pizza</h3>
                <p class="menu-description">Classic pizza topped with fresh tomatoes and mozzarella.</p>
                <span class="menu-price">$11.49</span>
                <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="11">
                    <input type="hidden" name="name" value="Margarita Pizza">
                    <input type="hidden" name="price" value="11.49">
                    <input type="hidden" name="quantity" value="1">
                    <button type="submit" class="btn btn-order">Order Now</button>
                </form>
            </div>
        </div>
        <!-- Item 12 -->
        <div class="menu-item">
            <img src="path/to/image12.jpg" alt="Menu Item 12" class="menu-img">
            <div class="menu-info">
                <h3 class="menu-name">Steak and Fries</h3>
                <p class="menu-description">Juicy steak served with crispy fries.</p>
                <span class="menu-price">$18.99</span>
                <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="12">
                    <input type="hidden" name="name" value="Steak and Fries">
                    <input type="hidden" name="price" value="18.99">
                    <input type="hidden" name="quantity" value="1">
                    <button type="submit" class="btn btn-order">Order Now</button>
                </form>
            </div>
        </div>
        <!-- Item 13 -->
        <div class="menu-item">
            <img src="path/to/image13.jpg" alt="Menu Item 13" class="menu-img">
            <div class="menu-info">
                <h3 class="menu-name">Lamb Chops</h3>
                <p class="menu-description">Tender lamb chops served with roasted vegetables.</p>
                <span class="menu-price">$22.99</span>
                <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="13">
                    <input type="hidden" name="name" value="Lamb Chops">
                    <input type="hidden" name="price" value="22.99">
                    <input type="hidden" name="quantity" value="1">
                    <button type="submit" class="btn btn-order">Order Now</button>
                </form>
            </div>
        </div>
        <!-- Item 14 -->
        <div class="menu-item">
            <img src="path/to/image14.jpg" alt="Menu Item 14" class="menu-img">
            <div class="menu-info">
                <h3 class="menu-name">Falafel Wrap</h3>
                <p class="menu-description">Crunchy falafel with fresh veggies in a wrap.</p>
                <span class="menu-price">$7.99</span>
                <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="14">
                    <input type="hidden" name="name" value="Falafel Wrap">
                    <input type="hidden" name="price" value="7.99">
                    <input type="hidden" name="quantity" value="1">
                    <button type="submit" class="btn btn-order">Order Now</button>
                </form>
            </div>
        </div>
        <!-- Item 15 -->
        <div class="menu-item">
            <img src="path/to/image15.jpg" alt="Menu Item 15" class="menu-img">
            <div class="menu-info">
                <h3 class="menu-name">Grilled Salmon</h3>
                <p class="menu-description">Perfectly grilled salmon served with rice.</p>
                <span class="menu-price">$16.99</span>
                <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="15">
                    <input type="hidden" name="name" value="Grilled Salmon">
                    <input type="hidden" name="price" value="16.99">
                    <input type="hidden" name="quantity" value="1">
                    <button type="submit" class="btn btn-order">Order Now</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
