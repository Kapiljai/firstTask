@extends('layouts.header')
@section('main-content')

<div class="container">
    <h1>Help Center</h1>
  
        <button id="helpBtn">Help</button>
   

        <div id="helpCenter" class="help-center hidden">
            <input type="text" id="searchBar" placeholder="Search for help...">
            <div id="searchResults" class="search-results"></div>
            <div id="defaultQuestions" class="default-questions">
                <h2>Frequently Asked Questions</h2>

                <div class="faq-item">
                    <strong>How Can I go on home page</strong>
                    <p>If you want to go on home page then click <a href="{{route('home')}}">Favourite Blog</a></p>
                </div>
                <div class="faq-item">
                    <strong>How to reset my password?</strong>
                    <p>To reset your password, go to the settings page and click on 'Reset Password'.</p>
                </div>
                <div class="faq-item">
                    <strong>How to contact support?</strong>
                    <p>You can contact support via the 'Contact Us' page or email us at support@example.com.</p>
                </div>
                <div class="faq-item">
                    <strong>How to update my profile?</strong>
                    <p>Go to the profile page and click 'Edit Profile' to update your details.</p>
                </div>
                <div class="faq-item">
                    <strong>How to check my order status?</strong>
                    <p>To check your order status, go to the 'Orders' page and find the order you want to track.</p>
                </div>
                <div class="faq-item">
                    <strong>How to view my order history?</strong>
                    <p>You can view your order history by going to the 'Orders' page and selecting 'Order History'.</p>
                </div>
                <div class="faq-item">
                    <strong>When was my password last changed?</strong>
                    <p>To see when your password was last changed, go to the settings page and check the 'Password History' section.</p>
                </div>
                <div class="faq-item">
                    <strong>How to manage my notifications?</strong>
                    <p>Visit the 'Notifications' section in your account settings to customize your notification preferences.</p>
                </div>
                <div class="faq-item">
                    <strong>How to delete my account?</strong>
                    <p>To delete your account, go to the 'Account Settings' page and select 'Delete Account'. Follow the prompts to complete the process.</p>
                </div>
                <div class="faq-item">
                    <strong>How to return an item?</strong>
                    <p>To return an item, go to the 'Orders' page, find the order containing the item, and select 'Return Item'. Follow the instructions to initiate the return process.</p>
                </div>
                <!-- Add more default FAQs here -->
            </div>
        </div>
    


</div>
    
@endsection