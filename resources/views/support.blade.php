<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{env('APP_NAME','XAIRLINES')}}</title>
    <link rel="icon" type="image/x-icon" href="https://seeklogo.com/images/H/hong-kong-airlines-logo-B5E8D635C9-seeklogo.com.png">
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</head>
<body>


<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <!-- Inner Content Container -->
    <div class="text-center p-6 bg-white rounded-lg shadow-lg">
        <!-- Title -->
        <h1 class="text-3xl font-semibold text-gray-800 mb-6">Need Help? Contact Our Support Team</h1>
        
        <!-- Support Text -->
        <p class="text-lg text-gray-700 mb-6">
            If you're experiencing issues or have any questions, feel free to reach out to us. We're here to help you and provide the support you need to make your experience better. Our team is available 24/7, so don’t hesitate to get in touch with us for any assistance.
        </p>

        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Frequently Asked Questions</h2>

        <div class="space-y-4 text-left">
            <!-- Question 1 -->
            <div class="border-t pt-4">
                <h3 class="font-semibold text-lg text-gray-800">How can I reset my password?</h3>
                <p class="text-gray-600">To reset your password, simply click the "Forgot Password" link on the login page and follow the on-screen instructions to reset your password.</p>
            </div>

            <!-- Question 2 -->
            <div class="border-t pt-4">
                <h3 class="font-semibold text-lg text-gray-800">How can I track my order?</h3>
                <p class="text-gray-600">To track your order, log into your account and visit the "Orders" section in your dashboard. You'll find all the details there including shipping status and estimated delivery time.</p>
            </div>

            <!-- Question 3 -->
            <div class="border-t pt-4">
                <h3 class="font-semibold text-lg text-gray-800">Do you offer 24/7 customer support?</h3>
                <p class="text-gray-600">Yes, our support team is available 24/7. Feel free to reach out to us anytime, and we’ll assist you as soon as possible.</p>
            </div>
        </div>
    </div>
</div>




@include('partials.footer')
</body>
</html>