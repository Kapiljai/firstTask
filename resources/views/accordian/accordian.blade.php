<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Styled Accordion Forms</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
        }
        .accordion-item {
            border: 1px solid #dee2e6;
            border-radius: 8px;
            margin-bottom: 15px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .accordion-header {
            display: flex;
            align-items: center;
            padding: 15px;
            cursor: pointer;
            background-color: #007bff;
            color: #fff;
            border-radius: 8px 8px 0 0;
        }
        .accordion-header:hover {
            background-color: #0056b3;
        }
        .accordion-body {
            padding: 20px;
        }
        .rotate-icon {
            transition: transform 0.3s ease;
            margin-right: 10px;
        }
        .rotate-icon.rotated {
            transform: rotate(180deg);
        }
        .accordion-form input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 4px;
        }
        .accordion-form button {
            margin-top: 10px;
        }
        .accordion-button {
            display: none; /* Hide default button if using SVG */
        }
        .accordion-collapse {
            transition: max-height 0.35s ease;
        }
        .accordion-collapse.collapse {
            max-height: 0;
            overflow: hidden;
        }
        .accordion-collapse.show {
            max-height: 500px; /* Adjust as needed */
        }
    </style>
</head>
<body>
    <div class="accordion" id="accordionExample">
        <!-- Accordion Item 1 -->
        <div class="accordion-item">
            <h2 class="accordion-header" data-form="form1" id="headingOne">
                <svg class="rotate-icon" data-target="#collapseOne" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M12 15.293l-4.293-4.293 1.414-1.414L12 12.465l2.879-2.879 1.414 1.414L12 15.293z" fill="#fff"/>
                </svg>
                <span>Accordion 1</span>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse">
                <div class="accordion-body" id="form1_body">
                    <form action="/submit" method="post" class="accordion-form">
                        @csrf
                        <input type="hidden" name="id" value="{{ old('id') }}">
                        <h5>Accordion 1</h5>
                        <input type="text" name="form1_field" class="form-control" placeholder="Field 1" value="{{ old('form1_field') }}">
                        <button type="submit" class="btn btn-primary mt-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Accordion Item 2 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo" data-form="form2">
                <svg class="rotate-icon" data-target="#collapseTwo" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M12 15.293l-4.293-4.293 1.414-1.414L12 12.465l2.879-2.879 1.414 1.414L12 15.293z" fill="#fff"/>
                </svg>
                <span>Accordion 2</span>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" >
                <div class="accordion-body" id="form2_body">
                    <form action="/submit" method="post" class="accordion-form">
                        @csrf
                        <input type="hidden" name="id" value="{{ old('id') }}">
                        <h5>Accordion 2</h5>
                        <input type="text" name="form2_field" class="form-control" placeholder="Field 2" value="{{ old('form2_field') }}">
                        <button type="submit" class="btn btn-primary mt-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Accordion Item 3 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree" data-form="form3">
                <svg class="rotate-icon" data-target="#collapseThree" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M12 15.293l-4.293-4.293 1.414-1.414L12 12.465l2.879-2.879 1.414 1.414L12 15.293z" fill="#fff"/>
                </svg>
                <span>Accordion 3</span>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse">
                <div class="accordion-body" id="form3_body">
                    <form action="/submit" method="post" class="accordion-form" >
                        @csrf
                        <input type="hidden" name="id" value="{{ old('id') }}">
                        <h5>Accordion 3</h5>
                        <input type="text" name="form3_field" class="form-control" placeholder="Field 3" value="{{ old('form3_field') }}">
                        <button type="submit" class="btn btn-primary mt-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Accordion Item 4 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour" data-form="form4">
                <svg class="rotate-icon" data-target="#collapseFour" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M12 15.293l-4.293-4.293 1.414-1.414L12 12.465l2.879-2.879 1.414 1.414L12 15.293z" fill="#fff"/>
                </svg>
                <span>Accordion 4</span>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse">
                <div class="accordion-body" id="form4_body">
                    <form action="/submit" method="post" class="accordion-form">
                        @csrf
                        <input type="hidden" name="id" value="{{ old('id') }}">
                        <h5>Accordion 4</h5>
                        <input type="text" name="form4_field" class="form-control" placeholder="Field 4" value="{{ old('form4_field') }}">
                        <button type="submit" class="btn btn-primary mt-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Accordion Item 5 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFive">
                <svg class="rotate-icon" data-target="#collapseFive" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M12 15.293l-4.293-4.293 1.414-1.414L12 12.465l2.879-2.879 1.414 1.414L12 15.293z" fill="#fff"/>
                </svg>
                <span>Accordion 5</span>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <form action="/submit" method="post" class="accordion-form" data-form="form5">
                        @csrf
                        <input type="hidden" name="id" value="{{ old('id') }}">
                        <h5>Accordion 5</h5>
                        <input type="text" name="form5_field" class="form-control" placeholder="Field 5" value="{{ old('form5_field') }}">
                        <button type="submit" class="btn btn-primary mt-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    {{-- <script>
        // Handle SVG click to toggle accordion
        document.querySelectorAll('.rotate-icon').forEach(icon => {
            icon.addEventListener('click', function() {
                const target = document.querySelector(this.getAttribute('data-target'));
                if (target) {
                    const isOpen = target.classList.contains('show');
                    // Toggle the 'show' class
                    target.classList.toggle('show', !isOpen);
                    // Rotate icon
                    this.classList.toggle('rotated', !isOpen);
                }
            });
        });

        // Restore accordion state on page load
        document.addEventListener('DOMContentLoaded', function() {
            const activeAccordion = localStorage.getItem('activeAccordion');
            if (activeAccordion) {
                const accordion = document.getElementById(activeAccordion);
                if (accordion) {
                    accordion.classList.add('show');
                    const icon = document.querySelector(`svg[data-target="#${activeAccordion}"]`);
                    if (icon) {
                        icon.classList.add('rotated');
                    }
                }
                localStorage.removeItem('activeAccordion');
            }
        });

        // Store active accordion state on form submit
        document.querySelectorAll('.accordion-form').forEach(form => {
            form.addEventListener('submit', function() {
                const accordionId = this.getAttribute('data-accordion');
                localStorage.setItem('activeAccordion', accordionId);
            });
        });
    </script> --}}

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Function to open the accordion based on the active form
            function openAccordion(formId) {
                const accordion = document.querySelector(`#collapse${formId}`);
                if (accordion) {
                    const bsCollapse = new bootstrap.Collapse(accordion, {
                        toggle: true
                    });
                    bsCollapse.show(); // Explicitly show the collapse
                    // Rotate icon
                    const icon = document.querySelector(`svg[data-target="#collapse${formId}"]`);
                    if (icon) {
                        icon.classList.add('rotated');
                    }
                }
            }
    
            // Function to handle accordion open based on URL parameters
            function handleAccordionOpen() {
                const urlParams = new URLSearchParams(window.location.search);
                const activeForm = urlParams.get('active_form');
    
                if (activeForm) {
                    openAccordion(activeForm);
                }
            }
    
            handleAccordionOpen();
    
            // Event listener to manage form submission and handle accordion state
            document.querySelectorAll('.accordion-form').forEach(form => {
                form.addEventListener('submit', function(event) {
                    event.preventDefault(); // Prevent default form submission
    
                    const formData = new FormData(this);
                    const activeForm = this.getAttribute('data-form'); // Changed from `formData.get('active_form')` to direct attribute
    
                    // Perform AJAX form submission here
                    fetch(this.action, {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        }
                    }).then(response => response.json()).then(data => {
                        // Handle success or error
                        if (data.success) {
                            // Optionally handle form success
                            alert('Form submitted successfully!');
                        } else {
                            // Handle errors
                            alert('Form submission failed!');
                        }
                    }).catch(error => {
                        console.error('Error:', error);
                    });
    
                    // Open the accordion based on the active form
                    openAccordion(activeForm);
                });
            });
        });
    </script>
    
</body>
</html>
