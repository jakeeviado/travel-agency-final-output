<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Your Bookings - Pava Travel Co.</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body style="font-family: Arial, sans-serif; margin: 40px; background-color: #fff;">
<x-navigation />

  <!-- Cart Section -->
  <h2 style="margin-top: 40px;">Your Cart</h2>

  <div style="display: flex; gap: 40px;">
    <!-- Cart Item -->
    <div style="border: 1px solid #ccc; border-radius: 10px; display: flex; align-items: center; padding: 10px; width: 400px;">
      <img src="/mnt/data/Product Description - Tour.png" alt="Tour Image" style="width: 100px; height: 100px; object-fit: cover; border-radius: 5px;">
      <div style="margin-left: 15px;">
        <div style="font-weight: bold;">Tour Package 1 - PLACE</div>
        <div style="margin-top: 5px;">$</div>
        <div style="font-size: 18px; font-weight: bold;">180</div>
        <div style="margin-top: 10px;">
          <button style="margin-right: 5px;">+</button>1<button style="margin-left: 5px;">-</button>
        </div>
      </div>
    </div>

    <!-- Order Summary -->
    <div style="border: 1px solid #ddd; background-color: #f5f5f5; padding: 20px; border-radius: 10px; width: 300px;">
      <h3>Order Summary</h3>
      <p><strong>Total Items:</strong> 2</p>
      <p><strong>Total Price:</strong> $180</p>
      <p><strong>Select Payment Method:</strong></p>
      <select style="width: 100%; padding: 5px;">
        <option>Cash on Delivery</option>
        <option>Credit Card</option>
        <option>Bank Transfer</option>
      </select>
      <div style="display: flex; gap: 10px; margin-top: 20px;">
        <button style="flex: 1; padding: 10px; background-color: #f0f0f0; border: none;">CANCEL</button>
        <button style="flex: 1; padding: 10px; background-color: #1a1a1a; color: white; border: none;">CHECKOUT</button>
      </div>
    </div>
  </div>
<x-footer />
</body>
</html>
