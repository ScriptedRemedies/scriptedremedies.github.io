<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" type="image/x-icon" href="Resources/logo.png">

    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Put custom stylesheet last to prioritize for bootstrap changes -->
    <link rel="stylesheet" href="styles.css">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>Beeline Pest Services</title>
</head>
<body>

    <!-- Everything nav -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top px-5">
        <a href="index.php" class="navbar-brand"><span class="yellowText" style="font-size: 2em">Beeline</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a href="services.php" class="nav-link">Services</a>
                </li>
                <li class="nav-item">
                    <a href="about.php" class="nav-link">About Us</a>
                </li>
                <li class="nav-item">
                    <a href="faq.php" class="nav-link">FAQ</a>
                </li>
                <li class="nav-item">
                    <button class="btn btn-outline-light" type="button" data-bs-toggle="modal" data-bs-target="#contact">Contact Us</button> <!-- TODO: activate form & popup -->
                </li>
                <li class="nav-item">
                    <button class="btn btn-outline-light" type="button" data-bs-toggle="modal" data-bs-target="#quote">Request a Quote</button> <!-- TODO: activate form & popup -->
                </li>
            </ul>
        </div>
    </nav>

    <!-- Contact Modal -->
    <div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mediumText" id="contactLabel">Contact Us</h5>
                </div>
                <div class="modal-body">
                    <p>Call: <a href="tel:360-894-4242">(360) 894-4242</a></p>
                    <p>Email: <a href="mailto:info@beelinenw.com">info@beelinenw.com</a></p>
                    <div>
                        <p>Location: Yelm, Washington
                        <br>Serves the South Sound</p>
                    </div>
                    <div>
                        <p>Hours: Mon- Fri:<br>9am- 4pm<br>Saturday: By Appointment Only</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Quote Modal -->
    <form method="POST" id="quoteForm">
        <div class="modal fade" id="quote" tabindex="-1" role="dialog" aria-labelledby="quoteLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mediumText" id="quoteLabel">Request a Quote</h5>
                    </div>
                    <div class="modal-body">
                            <!-- Split into two different div's for flex styling -->
                            <div>
                                <div class="form-group">
                                    <label for="quote-firstName">First Name *</label>
                                    <input type="text" name="quote-firstName" id="quote-firstName" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="quote-lastName">Last Name *</label>
                                    <input type="text" name="quote-lastName" id="quote-lastName" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="quote-email">Email *</label>
                                    <input type="email" name="quote-email" id="quote-email" class="form-control" required>
                                </div>
                            </div>
                            <div>
                                <div class="form-group">
                                    <label for="quote-services">Service *</label>
                                    <select class="form-control" id="quote-services" name="quote-services" required>
                                        <option disabled selected value="">(Select One)</option>
                                        <option value="Inspection">Pest Inspection</option>
                                        <option value="Ants">Ant Services</option>
                                        <option value="Rodents">Rodent Services</option>
                                        <option value="Spiders">Spider Services</option>
                                        <option value="Wasps/Hornets">Wasp / Hornet Service</option>
                                        <option value="Flea/Ticks">Flea & Tick Services</option>
                                        <option value="Cockroach">Cockroach Services</option>
                                        <option value="Bedbugs">Bedbug Services</option>
                                        <option value="Wildlife">Wildlife Management</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="quote-message">Additional Information:</label><br>
                                    <textarea name="quote-message" id="quote-message" style="width: 100%; height: 15vh;"></textarea>
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-outline-dark" name="quoteForm">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- Includes background video and two texts -->
    <div class="header">
        <video playsinline autoplay muted loop id="bgvid" src="Resources/sampleVideo.mp4"></video>
        <div class="headerContainer">
            <div class="companyName">
                <p class="yellowText">Beeline</p>
                <p class="bigText whiteText">Pest Services NW</p>
            </div>
            <div class="companyMoto">
                <p class="bigText whiteText">COMPLETE RESIDENTIAL AND COMMERCIAL PEST CONTROL</p>
                <p class="yellowText">Customer Satisfaction Guaranteed</p>
            </div>
        </div>
    </div>

    <!-- New info container / Can be updated for each season -->
    <div class="text-center py-5 newInfo">
        <p class="bigText highlightText highlight">Wasp & Yellow Jacket Baiting is Back!</p>
        <button class="btn btn-outline-dark" type="button" data-bs-toggle="modal" data-bs-target="#wasp">Contact Us</button><!-- TODO: Create different modal for wasp info -->
    </div>

    <!-- Wasp Modal -->
    <form method="POST">
        <div class="modal fade" id="wasp" tabindex="-1" role="dialog" aria-labelledby="waspLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mediumText" id="waspLabel">Wasp & Yellow Jacket Baiting</h5>
                    </div>
                    <div class="modal-body">
                            <!-- Split into two different div's for flex styling -->
                            <div>
                                <div class="form-group">
                                    <label for="wasp-firstName">First Name *</label>
                                    <input type="text" name="wasp-firstName" id="wasp-firstName" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="wasp-lastName">Last Name *</label>
                                    <input type="text" name="wasp-lastName" id="wasp-lastName" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="wasp-email">Email *</label>
                                    <input type="email" name="wasp-email" id="wasp-email" class="form-control" required>
                                </div>
                            </div>
                            <div>
                                <div class="form-group">
                                    <label>Wasp/Yellow Jacket Situation *</label>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="currentWasp" name="wasp-siutation" value="yes" class="custom-control-input" required>
                                        <label class="custom-control-label" for="currentWasp">I currently have wasps on my property</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="noWasp" name="wasp-siutation" value="no" class="custom-control-input">
                                        <label class="custom-control-label" for="noWasp">I do not have wasps currently but would like to prevent them</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="wasp-message">Additional Information:</label><br>
                                    <textarea name="wasp-message" id="wasp-message" style="width: 100%; height: 15vh;"></textarea>
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-outline-dark" name="wasp-submit">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- Includes cards listing services -->
    <div class="servicesSection whiteText">
        <p class="text-center bigText">Our Services</p>
        <!-- Using div as hr line instead of hr elements / hr element had muted colors -->
        <div class="hr"></div>
        <div class="card-deck mx-auto text-center">
            <a href="services.php">
                <div class="card notSeen fadeElement">
                    <svg class="card-img-top" preserveAspectRatio="xMidYMid meet" data-bbox="18.501 10 163 179.998" viewBox="18.501 10 163 179.998" xmlns="http://www.w3.org/2000/svg" data-type="tint" role="presentation" aria-hidden="true" aria-label="">
                        <g>
                            <path d="M106.462 56.761s-6.791-6.152 2.534-9.151c0 0 5.017-1.678 9.578-1.169 0 0 1.166.763 1.672-5.541v-8.185s.101-1.474 4.814-5.338c0 0 6.689-4.169 7.095-14.947 0 0-.304-2.237.76-2.339 0 0 1.622-.864.963 2.745 0 0-.051 10.219-8.615 17.133 0 0-1.774.508-1.571 9.151 0 0-.203 6.914-2.99 8.083 0 0 4.51 2.796 4.713 4.677 0 0-1.064 1.068 5.676.661 0 0 5.676.508 9.831 3.203 0 0 3.851 1.83 7.247-.966 0 0 11.199-5.236 17.534 1.169 0 0 1.064 2.034-1.064.915 0 0-1.875-3.66-8.463-3.152 0 0-4.814.559-8.868 2.796 0 0-4.155 3-11.199-.661 0 0-1.926-2.339-10.237-1.474 0 0-.76 8.541-8.463 10.219 0 0-4.51 1.729-6.74-2.237 0 0-1.52-1.729-1.52-.102 0 0 2.23 6.101-7.348 8.439l-5.98 1.169s-2.331 2.135 3.649 2.034c0 0 10.693.508 13.226-2.44 0 0 1.723-1.678 5.878 2.44 0 0 5.878 3.864 11.453 5.592 0 0 1.064 2.542-3.649 0 0 0-7.247-3.559-11.301-5.236 0 0-1.267-1.068-5.22.966 0 0-6.537 3.203-14.949-.661 0 0-2.686-1.068-3.294 3.203 0 0-1.267 1.83 1.166 5.033l9.172 10.981s1.622 2.034.963 4.982c0 0-4.054 12.354-3.294 18.2 0 0 .557 7.982-.76 6.914 0 0-1.824 1.576-.861-4.779 0 0 0-14.794 2.584-21.403 0 0 1.064-1.271-1.064-2.796 0 0-7.601-4.982-10.997-14.794 0 0-1.52-4.677-5.574 4.576 0 0-.76 3.711.557 7.473 0 0 .203 7.27-4.713 12.761L65.11 117.26s-14.848 9.914-18.699 14.082c0 0-2.331 2.339-2.99 3.864-.659 1.576-3.851 1.373-1.926-1.271 0 0 9.476-9.558 19.46-15.76 0 0 12.72-10.015 15.406-13.32 0 0 5.017-6.914 4.358-12.456 0 0 0-2.644-2.331.407-2.331 3-4.51 10.117-13.683 9.914 0 0 .405 2.796-3.395 3.813 0 0-1.723.305-7.5.508 0 0 .101 2.135-3.851 1.678 0 0-7.348-.508-10.338-11.388 0 0-1.267-3.965 2.23-4.576 0 0 .861-8.287 8.108-9.049 0 0 1.824-7.88 12.162-7.118 0 0 3.193-3.406 7.703-3 0 0 .304-4.169-10.895-3.203 0 0-11.098 4.677-17.433 5.745 0 0-18.041 7.016-22.348 6.914 0 0-2.686-1.068 2.889-2.339l34.51-11.591s6.537-2.898 12.517-.102c0 0 1.723.559 2.686 2.135 0 0 1.064 2.542 5.118 1.373l3.75-.763s1.52-.407-1.064-2.135c0 0-8.108-5.338-10.237-12.812 0 0 1.166-1.576-5.574-1.169 0 0-12.72 2.135-23.514-8.439 0 0-.861-1.474.557-.966 0 0 7.5 7.778 14.949 7.372l12.162-.203s3.547-.864 5.98 4.169l7.044 10.524s0 2.644 8.311-.661c0 0 1.926-.508.76-6.914 0 0-1.52-3.61 10.49-12.151 0 0 7.5-3.101 9.071-6.101 0 0 1.267-2.644 2.23-.966 0 0 2.128 2.491-5.98 5.847 0 0-7.5 3.61-12.517 12.151 0 0-.709 1.474-1.064 3.813 0 0-.456 3.101 2.331-1.373 0 0 4.814-7.677 11.453-3.711.05-.152 1.571.051.456-1.271z"></path>
                            <path d="M130.785 141.753s-2.483-2.644-5.422-.966c0 0-5.169 2.44-7.551 8.033 0 0-.101 1.271-3.75-1.881l-4.966-3.457s-.608-1.474-7.297 1.118c0 0-7.196 4.474-20.98 1.83 0 0-3.193 1.068 2.128 1.779 0 0 9.882 2.644 22.855-3.559 0 0 2.128-.915 4.814 2.186 0 0 2.939 2.644 5.777 3.152 0 0-3.193 7.728 9.071 7.829 0 0 .608-.61 1.52 1.678l4.459 7.829s1.318 2.135.709 6.965c0 0-1.166 12.862 3.294 15.709 0 0 2.584-.203-.709-3.355 0 0-1.875-1.373-.963-8.236l.456-7.626s-.709-8.236-7.044-13.93c0 0 14.037-4.118 10.49-10.575 0 0-4.003-2.542-1.723-2.237 0 0 5.574.407 6.081-2.44 0 0 1.672-2.034 1.419 3.61 0 0-.456 10.88-2.331 17.133 0 0-2.584 8.897-1.166 10.575 0 0 1.318 1.373 1.318-2.542 0 0 1.672-12.049 4.003-17.946 0 0 3.193-8.439-1.672-14.337 0 0-1.824-2.847 2.686-4.525l3.091-1.271s2.027-1.373 6.335 3.05c0 0 5.169 3.813 10.237 3.152l5.068-.407s.963-.153.963-2.339c0 0 0-3 8.615-2.237 0 0 2.027-1.017 0-1.423 0 0-9.882-1.22-10.845 4.423 0 0-.304 2.237-7.703-.61a1.825 1.825 0 0 1-.456-.203c-7.855-3.152-6.132-4.982-12.72-4.982 0 0-2.179-2.898 5.321-2.491 0 0 2.483.763 3.142 3.254 0 0-.152 1.83 4.409-.153 0 0 2.331-1.169 7.703-.508 0 0 1.723.763 2.179-4.576 0 0 .152-3.406 8.311-3.406 0 0 2.686-1.83 0-1.678 0 0-8.818 0-10.541 7.321 0 0-.304 1.678-5.169.915 0 0-3.294-.508-4.713.661 0 0-5.473-1.424-5.828-5.643 0 0 16.774 4.525 19.916-10.015 0 0 2.027-11.032-8.311-13.625 0 0-15.862-3.711-17.737 13.625 0 0 .152 4.271 1.875 6.762 0 0 .557.712-1.47.458-.101 0-.253-.051-.405-.051-2.534-.407-1.723 1.322-.963 2.745 0 0-2.534 1.83-2.686-4.576 0 0-1.571-4.067 2.686-7.473 4.257-3.406 2.686-4.728 1.267-7.575 0 0-6.74-9.304 2.534-21.81 0 0-.608-1.83-2.179 0 0 0-9.122 12.151-1.115 23.793 0 0 .304 3-3.75 4.423 0 0-3.294 1.576-1.723 12.303 0 0 1.571 4.321-2.534.915l-35.473-37.011s-2.686-.915-.152 1.424l34.054 36.604s1.419 3 .963 4.067c0 0 .709 1.932-3.345-.254-.152-.102-.304-.153-.456-.254-4.561-2.593-6.74-1.068-10.338.407 0 0-2.179 2.745-9.122-2.898 0 0-3.446-5.999-12.416-1.322 0 0-1.571 1.983.76 1.424 0 0 3.902-4.067 7.399-1.576 0 0 7.551 7.728 11.605 7.321 0 0 4.409-.153 5.169-1.322 0 0 4.51-3.508 8.159-.153 0 0 0 1.322-3.294 1.983.153.102-4.256.457-1.823 8.998z"></path>
                        </g>
                    </svg>
                    <div class="card-body">
                        <h5 class="card-title">General Pest Protection</h5>
                    </div>
                </div>
            </a>
            <a href="services.php">
                <div class="card notSeen fadeElement">
                    <svg class="card-img-top" preserveAspectRatio="xMidYMid meet" data-bbox="17.484 61.812 165.162 75.988" viewBox="17.484 61.812 165.162 75.988" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-label="">
                        <g>
                            <path d="M38.1 78.7S20.9 86.9 17.9 96c0 0-4 8.8 12.8 9 0 0 14-2.2 16 5.1 0 0 .8 8.4 3.5 9.1 0 0 2.5 3.2 0 6.4 0 0-4.9 1.2-4.9 4.7 0 0 0 2.7 2 0 0 0 2.7-.5.5 2.2 0 0 2 1.5 2.2-2.7 0 0 1.2-2 1.3 1.2 0 0 1.9 3.2 3.1-.5 0 0 4-4.7 3.2-7.9 0 0-.7-3.5 5.7-1.7 0 0 5 6.2-2 7.9 0 0-3.5.5-3.7 3.9 0 0-.1 1.5 3-1.7 0 0 1.5 1.5 0 3.2 0 0 1.6 2 2.8-1 0 0 2.3-3.5 2.3-1v2.9s1.1.5 1.1-3.2v-2.7s-1.7-1.7 5.8-3.7c0 0 8.1-1.7 9.3-4.4 1.2-2.7 17.5-1.2 17.5-1.2v3.4s-7.3-.5-10 2.7l.6 1.5-6.5 1.5s-1.5 1.1-1 1.9c.2.3.6.5 1.3.6 3 .5 9.2-2 9.2-2s0 .7-.7 1.7c0 0-2.2 2.8.5 2 0 0 3.2-.9 3.2-2.9h5.5s10.2-1.2 11.2-5.8c0 0 0-3.8 6.5-4.1.3 0 .6-.3 1-.3 7.5 0 9.2-2.3 12.2-7.5 0 0 .7-2.3 6.5 1.7 0 0 17.1 9.3 29.3 6.6 0 0 10.4-1.2 9.9 7.6 0 0 1 5.2-23.8 3.7 0 0-32-1.2-44.4 5.1-.3.2-.7.3-1 .5 0 0 19.6-2.7 28.3-2.2 0 0 43.4 3.7 45.4-7.4 0 0 1.5-9.6-12.6-11.1 0 0-24.6 2.2-40.9-18.7 0 0-15.6-31.8-42.9-23.1 0 0-9.9 5.4-16.9 4.7 0 0-6.5.2-3.5-6.2 0 0 4.2-12.3-8.2-11.1 0 0-7.5 1-8.4 9.4 0 0-3.7 3.7-4.5-.5l-2.7-9s-3-3.1-4.5 3c0 0-2.2 6.9 1.5 11.8-.1.3 1.6 0-.9 1.3z"></path>
                        </g>
                    </svg>
                    <div class="card-body">
                        <h5 class="card-title">Rodent Control and Exclusion</h5>
                    </div>
                </div>
            </a>
            <a href="services.php">
                <div class="card notSeen fadeElement">
                    <svg class="card-img-top" preserveAspectRatio="xMidYMid meet" data-bbox="33.542 14.494 132.985 170.949" viewBox="33.542 14.494 132.985 170.949" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-label="">
                        <g>
                            <path d="M165.9 144l-5.4-11.9c-6.4-14.9-15.2-28.4-15.2-28.4-4.8-6.9-15.6-5-22.7-3.1s-6.8-6-6.8-6c14.8-6.9 13.9-9.8 13.9-9.8l22.2-.8s8.5.6 8.5-1.7c0-2.4-7.1-3-7.1-3-8.1-1.7-20.3-1.9-20.3-1.9-6-.2-8.4 2.4-8.4 2.4L112.9 89c-1.7-2.1-7.3-3-7.3-3 10.2-11.9 14.3-33.8 14.3-33.8l3.3-26.9c.5-4.1 3.3-10.6 1.4-10.7-1.9-.2-2.1-1.1-6.2 9.5s-8.2 33.5-8.2 33.5c-2.5 11.2-5.4 12.5-5.4 12.5C100.4 44 78.5 52 78.5 52c-25.2 11.1-4.9 32.4-4.9 32.4L47.7 68s-10-5.7-12.5-5.7-1.9 3.6 0 3.8 23.3 18 23.3 18c9.2 7.6 22.8 13.1 22.8 13.1l.3 5.2c-8.1-6.8-22.5-2.5-22.5-2.5s-17 4.4-22.5 9.1.8 4 .8 4l20.8-5.5c11.4-3.5 25.8.2 25.8.2l3.5 7.9c-20.5 5.8-12.4 32.5-12.4 33s8.9 27.2 8.9 27.2c3.2 10.4 4.4 9.6 4.4 9.6 2.8.5 1.6-3.6 1.6-3.6-11.2-48.8-7.8-49.2-7.8-49.2 1-4.4 1.7-2.1 1.7-2.1-.3 9.8 15.9 21.2 15.9 21.2s5.2 2.8 11.6 10.4c6.4 7.6 8.1 2.7 8.1 2.7 1.3-2.1-6.2-7.8-6.2-7.8-12.2-9-16.3-20.1-16.3-20.1 5.1 1.9 16.6-1.3 16.6-1.3 20.6-6.3 17.3-14.9 17.3-14.9 4.9-.6 5.2-1.1 5.2-1.1l7.8 24.8-3 17.5s-1.3 6.6.5 8.1c1.7 1.4 3.2-2.2 3.2-2.2l5.9-29.2c0-3.3-7.5-22.8-7.5-22.8-4.9-11.7-17.6-5.5-17.6-5.5l-2.2-2.5c5.1 1 16.6-1 16.6-1l18.3 31.8s4.8 8.5 7.1 8.9c2.5.5.7-3.5.7-3.5z"></path>
                        </g>
                    </svg>
                    <div class="card-body">
                        <h5 class="card-title">Spider Prevention</h5>
                    </div>
                </div>
            </a>
            <a href="services.php">
                <div class="card notSeen fadeElement">
                    <svg class="card-img-top" preserveAspectRatio="xMidYMid meet" data-bbox="23.018 23.488 153.982 153.03" viewBox="23.018 23.488 153.982 153.03" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-label="">
                        <g>
                            <path d="M169.8 47c-9.6-2-23.9 7.1-23.9 7.1l-36.6 22.1-26 16.1s-16.7-3.7-20.9 11.6c0 0-4.4 12 5 19.3l-.9 5.8s-10.5-1.7-11.4 3.1c-.9 4.9 2.5 4 2.5 4s.7 10.6 7.1 11.2c0 0 2.3 0 1-2.3 0 0-6.4-4.9-5.9-9.8 0 0 3.2-1.4 7.7-.3 0 0 3.3 1.6 5-2.9l1.3-4.2s2.8 2 5.9 2c0 0-.5 4.8 1.4 6.7L76.9 148s-.9 3.3 2.1 6.5l2.6 2.8s1 1.2 3.9.4c0 0 1 5.3 4.8 6.7 0 0 1.9.4 1.1-1.5 0 0-3.5-3.4-4-5.1-.5-1.7-5.2-8.3-5.2-8.3s2.7-1.7 2.6-12.4c0 0 2.3-1.4 1.6-7.8 0 0 2.8.3 4.2-1 0 0 6.3 11.1 13.4 13.1v14.2s.3 4.2 5.6 8.1l5.2 4.2s4.8 2.8 7.4-1.4c2.6-4.2-3.8-6.7-3.8-6.7l-8-3.7s1.8-5.5-2.7-16.3c0 0-8.9-5.5-11.3-17.8l5.3-11.6s2.6-5.4-3.5-9.9l44.1-4.8s17.7-1.6 27.2-17.1c9.9-15.6 10-29.7.3-31.6z"></path>
                            <path d="M141.4 150.2s3.5 7.7 16.6 8.7c13.1 1 6.9-23.1 6.9-23.1-11.2 14.1-23.5 14.4-23.5 14.4z"></path>
                            <path d="M158.5 160l5.6 4.7c-.8-1.8.8-6.7.9-6.9-1.7 3.1-6.3 2.2-6.5 2.2z"></path>
                            <path d="M164.1 134.5c-3.9-13.7-8.4-12.2-8.4-12.2-5.4 14.6-23.2 24.5-23.2 24.5 13.6 9.6 31.6-12.3 31.6-12.3z"></path>
                            <path d="M153.8 123.8c4-7.9-10.1-14.2-10.1-14.2-8.4 17.7-24.7 29.2-24.7 29.2 1.6 1.7 6.3 11.8 16.2 4.9 9.9-6.9 14.6-12 18.6-19.9z"></path>
                            <path d="M85.2 88.2l57.1-34.4s3.8-1.4 4.3-7.1c0 0 4.9-25.8-10.2-23 0 0-10.4.4-26.1 22.1L85.2 83s-4.2 7.7 0 5.2z"></path>
                            <path d="M117.3 138.4c19-14.5 24.5-29.4 24.5-29.4s-1-2.9-4.1-4.5c-3.1-1.6-6.4-.6-6.4-.6-8 22.1-23.2 27.6-23.2 27.6 1.4 6.5 9.2 6.9 9.2 6.9z"></path>
                            <path d="M128.6 107.7c3.8-6.7-4.3-7.9-4.3-7.9-11.5-2.4-20.6 12.6-20.6 12.6-4.7 7.6-6.2 14.8-1.9 17.3 4.3 2.5 9.2-.9 9.2-.9 8.5-5.7 13.8-14.5 17.6-21.1z"></path>
                            <path d="M122.8 167.1c-.5 2.4 2.1 8 2.1 8s1 1.9 1.9 1.3c.9-.5.9-2.9-1.9-9.3.1 0-1.5-2.4-2.1 0z"></path>
                            <path d="M48.4 90c-1.3.5-2.7 1.2-4 2.5 0 0-1.4.2-2.5-1.3 0 0-2.9-4.3-8.8-2.7 0 0-1.9.8-4.2-.4s-2.5 1.1-2.5 1.1 0 3.5 3.9 2.3c0 0 1.4-.6 2.6-1.4s3.1-1 5.1 0c0 0 3.3 1.3 4.1 5-.1.1-.2.2-.2.4 0 0-.3.4-.7 1.3l-2.8-1.7s-3.7-2.7-5.8-.8c-2.1 1.9-4.4 2.5-4.4 2.5l-2.8.9s-2.9.2-2.3 3.1c0 0 1.4 3.2 4.4 0 0 0 3.2-4.6 5.6-4.9 0 0 4.5-2 7.3 3.2-1.1 3.3-2.3 10 .2 20.6 0 0 3.2 11.4 9.9 3.2 0 0 7.5-9.4 11.3-22.9 3.9-13.5-11.2-10.9-13.4-10z"></path>
                        </g>
                    </svg>
                    <div class="card-body">
                        <h5 class="card-title">Stinging Insect Control</h5>
                    </div>
                </div>
            </a>
            <a href="services.php">
                <div class="card notSeen fadeElement">
                    <svg class="card-img-top" preserveAspectRatio="xMidYMid meet" data-bbox="4.14 69 833.705 721.83" viewBox="4.14 69 833.705 721.83" xmlns="http://www.w3.org/2000/svg" data-type="shape" role="presentation" aria-hidden="true" aria-label="">
                        <g>
                            <path d="M249.5 74.6c-17.6 11-25.4 16.3-33.6 23-10.2 8.2-26.2 23.7-33.1 32.2-2.9 3.4-6.6 7.1-8.4 8.1-1.8 1.1-4 3.4-5 5.2-1.4 2.9-1.5 4.2-.5 9.6.6 3.4 3 10.6 5.2 16 8.2 19.8 11.1 28 12.5 35.1 2.9 15 6.4 17.9 30.4 24.8 12.2 3.5 32.2 7.4 38.5 7.4 4.7 0 5.6.4 7.7 2.9 5.1 6.3 5.4 6.3 33.6 6.6 25.3.2 32.1.8 46.5 4.6l3.8 1-3.3 4.2c-1.8 2.3-4.9 5.8-6.9 7.9l-3.6 3.8-9.4-.6c-24-1.6-66.3 6.8-74.5 14.7-3.2 3.1-3.4 3.1-10.1 2.5-9.6-1-22.3-4.3-31.5-8.1-10.5-4.4-13-4.9-18.6-3.5-4.7 1.3-4.7 1.2-12.7-3.6-11.4-6.8-18.6-12.5-24.6-19.4-5.9-6.8-9.8-9.5-14.9-10.5-3.1-.6-4.7-2.1-12-11.8-8.2-10.8-32.6-36.4-38.3-40.2-2.6-1.7-2.9-1.7-4.5-.1-4.1 4.1 0 27.6 7.9 44.4 4 8.7 10.8 19 15.3 23.1 1.7 1.6 2.6 3.5 2.6 5.4 0 12.9 18.5 24.4 57.5 35.6 6.2 1.8 7.3 2.5 9.4 6 5.3 8.6 13.6 10.5 45.1 10.6 22.6.1 23.7.2 28 2.4 7 3.7 9.5 4.1 15.5 2.6 3-.8 11.2-4.6 18.2-8.3 7.1-3.8 15.4-7.9 18.6-9.1 5.5-2 11.7-2.8 11.7-1.5 0 .4-1.4 3-3.2 5.8-1.8 2.8-6 10.5-9.4 17.1-6.6 13-8.4 14.9-25.6 27.1-10.4 7.4-16.9 10.4-32.8 15.3-18.8 5.8-23.8 8.4-26.7 14.3-5 10-18.8 16.3-46.5 21.3-8 1.4-14.9 3.1-15.8 4-.9.8-2.2 3.3-2.9 5.5-1.1 3.6-1.6 4.1-6.4 5.5-9.6 2.7-18.1 4.4-36.2 7l-18 2.6-4 3.8c-2.9 2.8-6.4 4.7-13 6.9-4.9 1.7-15.1 5.1-22.5 7.7-14.4 5-29 8.4-35.5 8.5-4.4 0-8.6 1.8-9.3 3.8-.8 2.6 6.5 7.9 14 10.2 24.4 7.4 48.6 6.4 72.5-3.1l7.7-3 5.4 1.7c3.8 1.1 7.4 1.5 12.2 1.2 7.9-.6 16-4.5 35.3-17.2l11.8-7.7 6.9 1.5c3.8.9 8.3 1.3 10.2 1 8.4-1.6 21.3-9.9 38.6-24.6l9.3-8 7.2-.2c8.6-.3 10.9-1.3 26.5-12.5 6.2-4.5 11.4-8.1 11.7-8.1.9 0-4.8 18.7-7.1 23.4-4.4 8.7-16.6 28.3-23.3 37.4-3.5 4.8-13.5 15.7-22.2 24.2-18.9 18.6-19.4 19.4-21 37.6-2 22.2-6.1 35.2-17.2 53.7-11.1 18.7-12.1 23.7-6.1 32.7 3.6 5.5 3.6 5.5 3 14.2-.3 4.8-1.1 10.8-1.6 13.5-2.2 9.5-8 47.9-8 52.5 0 6.6 2.4 12 6.9 15.6 2.8 2.3 4 4.1 4.5 6.9 3.3 18.8 15.3 44.7 30.8 66.6 16.3 22.9 29.8 32.8 29.8 21.9 0-3.7-7-39-11.6-58.1-1.3-5.6-4.1-14.2-6-19-8.3-19.9-8-18.9-5.9-27.4 1.8-7.3 1.8-8 .1-19.9-.9-6.8-2.8-18.4-4.2-25.8-1.4-7.4-2.5-17.4-2.6-22.1-.1-7.3.1-9 2-11.6 6.4-9 8.4-18.2 12.7-57.5 2.4-21.6 2.8-22.9 8-25.7 5.7-3 7.9-6.3 17-26.1 4.2-9.1 7.9-16.8 8.3-17.2.4-.4.7 10.4.7 24 0 14.2.6 28.7 1.3 34.2 8.2 61.2 33.7 108.5 73 135.8 33.3 23.2 78.3 31.7 117.6 22.3 16.6-4 25.9-7.3 38.1-13.3 59.9-29.9 88.7-90.9 90.8-192.8l.2-10.5 8.8 18c10.3 20.8 12.1 23.5 17.5 25.9 4.9 2.2 4.3-.2 8.2 32.1 3.7 30 5.9 39.8 10.7 48.4l3.6 6.4-.6 11.6c-.3 7.2-1.9 18.3-4.1 29.2-4 19.5-4.4 27.3-2 35.6 1.9 6.5 1.5 9.5-2.7 19.5-5.4 12.9-8.9 23.8-14.5 46.3-7.3 28.8-9.6 40.6-8.2 42.2 3 3.7 11.3-1.8 22.1-14.8 17.8-21.5 34.2-52.6 39.3-74.9 1.3-5.5 2.3-7.3 7-12.2 7.3-7.6 7.3-5.4-1.6-60.1-3.9-24.6-3.9-26.9.5-33.7 5.7-9.1 5.2-12.2-4.9-30.9-12.2-22.4-15.4-30.3-17.1-41.8-.8-5.4-1.5-11.9-1.5-14.5 0-6.8-1.8-14.7-4.5-19.3-1.3-2.2-8.7-10.1-16.5-17.5-19.9-18.8-32.2-35.2-44.1-59-4.3-8.7-7.9-19.3-7.9-23.4 0-2.2 1.6-1.3 13 7 12.2 9 18.8 11.8 25.5 11.1 5.6-.6 6.7 0 16 8.6 5.5 5.1 24.9 19 29.6 21.1 7.1 3.4 14.1 4.1 20.3 2.2 5.8-1.8 4.4-2.4 23.1 9.7 20.2 13.2 30.2 16.1 41.6 12.2 4.5-1.5 4.7-1.5 16.5 2.4 6.5 2.2 15.9 4.7 20.8 5.6 11.4 1.9 29.4 1.9 38.8 0 8.8-1.9 19.4-7 22.2-10.8 1.8-2.5 1.9-2.9.4-4.3-1-1-4.5-1.9-9.5-2.4-12.9-1.4-21.8-3.9-51.6-14.4-12.5-4.4-16.4-6.2-18.3-8.6-3-3.5-6-4.4-22.4-6.5-11.1-1.4-28.9-4.9-37.5-7.3-2.3-.6-3.6-2-5.4-5.9-2.8-6-4.7-7-14.6-8.3-10.3-1.3-20.8-3.8-29.7-7.1-12.3-4.5-16.6-7.7-20.4-15.1-3-5.9-5.2-7.1-24.9-13.3-19.2-6-25.8-9.3-39.9-19.9-12.7-9.6-13.5-10.5-19.6-22.6-2.3-4.6-6.2-11.7-8.6-15.6-2.4-4-4.4-7.5-4.4-7.8 0-.3 1.3-.6 3-.6 4.2 0 15.1 4.3 24.4 9.6 19.6 11.4 26.7 12.9 35.5 7.7l4.5-2.6 25-.2c32.4-.2 38.3-1.6 44.4-10.5 2.2-3.2 3.8-4.2 8.2-5.5 25.4-7.3 41.9-14.4 50.3-21.6 5.2-4.5 8.7-10.3 8.7-14.5 0-1.6 1.5-4.5 3.8-7.3 12.9-15.5 21.2-34.8 23-53.1 1.4-13.8-.3-15.5-8.8-9.2-9.6 7.2-28.9 27.8-37.7 40.4-4.7 6.7-5.9 7.8-9.1 8.4-5.3.9-7.6 2.6-17.5 12.6-9.2 9.2-16.4 14.6-25.5 19.2-5 2.5-5.7 2.6-10.6 1.5-5-1.1-5.6-1-15.6 3-12.6 4.9-24 7.9-33.2 8.8-6.4.6-7.1.4-9.6-1.9-5.7-5.4-14.7-8.4-38.7-12.9-9.3-1.8-16-2.3-29.4-2.4l-17.4-.1-6.4-7.3c-3.6-4.1-6.1-7.7-5.6-8.1 1-.9 14.9-3.6 26.8-5.1 5.5-.7 16-1 26.9-.7 9.9.3 19.3.2 21-.3 1.6-.5 4.8-2.6 7-4.8 3.9-3.6 4.5-3.9 12.1-4.5 17.2-1.3 45-8.7 55.2-14.6 6.7-3.9 8.1-6 10.3-16.4 1.1-4.7 5.5-17.8 10-29 4.4-11.2 8.3-22.4 8.6-24.8.8-5.6-1.2-9.8-6-12.8-1.9-1.1-5.8-5-8.6-8.7-7-8.8-17.3-18.8-30-29C609.5 84.6 584.6 69 579 69c-3.4 0-2.5 5.5 2.3 14.1 19.8 35.6 26.7 45.6 44.5 64.1l8.3 8.6-1.5 7.4c-.8 4-1.7 9.5-2.1 12.3-1.1 8.7-1.4 9.4-5.3 11.3-2 1.1-7.7 4.5-12.7 7.6-11.3 7.3-18.4 10.9-26.3 13.5-7.3 2.3-11.2 2.6-28.7 1.6-11.8-.7-14-.5-24 1.8-11.9 2.7-24.5 7.4-42.2 15.7l-11.1 5.2-6.7-4.7c-5.6-4-6.5-5.1-6-6.9 3.4-10.6 3.7-13.1 2.6-19.5-.7-3.6-2.6-10.5-4.2-15.5-2.2-6.7-3.2-12.3-3.9-21.6-.5-6.9-1.5-14.9-2.1-17.9-2.4-11.8-12.1-30.6-22.2-43.1-8.8-10.9-12-9.3-12.4 6.4-.5 15.9-2.4 48.9-3 51.3-2.4 10.3-6-16.7-6.4-48.7-.1-11.8-.7-14.8-3.1-16.4-1.4-.8-2.4-.4-4.8 1.9-4.4 4.2-14.5 20.1-19.5 30.8-5.7 12-7.4 19.2-8.5 34.6-.7 9.9-1.7 15-4.5 24.1-5.3 17.1-5.5 24-.9 34.6.2.6-2.1 2.8-5.2 5-3.1 2.1-6.2 4.3-6.8 4.8-.7.5-5.9-1.3-13.6-4.9-16.1-7.3-39.2-15-49.9-16.6-5.6-.8-12-.9-19-.4-18.3 1.3-21.6.7-36.6-6.8-8.6-4.3-29.6-17.3-30.7-19-.3-.6-.9-3.8-1.3-7.1-.4-3.4-1.3-9.2-2.1-12.9-.8-3.8-1.4-7.1-1.4-7.4 0-.3 2.8-3.5 6.3-7.1 6.2-6.6 19.7-22.3 24.9-29.2 1.5-1.9 5.5-8.5 8.9-14.5 15-26.7 16.4-29.8 15.3-34.2-.9-3.6-4-2.9-13.9 3.3z"></path>
                        </g>
                    </svg>
                    <div class="card-body">
                        <h5 class="card-title">Flea & Tick Control</h5>
                    </div>
                </div>
            </a>
            <a href="services.php">
                <div class="card notSeen fadeElement">
                    <svg class="card-img-top" preserveAspectRatio="xMidYMid meet" data-bbox="32 30 136 139.999" viewBox="32 30 136 139.999" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-label="">
                        <g>
                            <path d="M166.24 159.692l-22.339-22.296c10.778-11.867 16.684-27.081 16.684-43.115C160.585 58.838 131.742 30 96.288 30 60.838 30 32 58.838 32 94.281s28.838 64.281 64.288 64.281c13.936 0 27.593-4.606 38.714-13.017l22.686 22.687a6.004 6.004 0 0 0 4.274 1.767 6.038 6.038 0 0 0 4.278-1.772c2.347-2.35 2.347-6.184 0-8.535zm-17.742-65.411c0 28.78-23.42 52.196-52.211 52.196-28.785 0-52.201-23.416-52.201-52.196s23.416-52.196 52.201-52.196c28.791 0 52.211 23.416 52.211 52.196z"></path>
                        </g>
                    </svg>
                    <div class="card-body">
                        <h5 class="card-title">Pest Inspection</h5>
                    </div>
                </div>
            </a>
            <a href="services.php">
                <div class="card notSeen fadeElement">
                    <svg class="card-img-top" preserveAspectRatio="xMidYMid meet" data-bbox="10.006 19.497 180.148 159.716" viewBox="10.006 19.497 180.148 159.716" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-label="">
                        <g>
                            <path d="M85.214 63.948c-5.464-5.818-16.071-15.354-32.143-10.99C37.321 57.16 32.5 70.897 30.893 78.655c-2.25 11.798 1.125 23.758 6.589 25.051 11.25 2.586 18.964-8.081 26.357-10.182 7.554-1.939 19.446 3.394 27.964-4.525 4.34-4.041.483-17.617-6.589-25.051"></path>
                            <path d="M80.554 51.826c4.179 1.455 9.804-3.717 11.893-9.374 2.089-5.818-.161-10.02-4.339-11.475-4.018-1.616-8.518.162-10.607 5.98-2.09 5.657-.965 13.253 3.053 14.869"></path>
                            <path d="M28.804 65.725c-2.732 3.394-10.286 1.778-14.946-2.263-4.661-3.879-4.821-8.727-1.929-11.96s7.554-4.04 12.214-.162c4.5 3.88 7.393 10.992 4.661 14.385"></path>
                            <path d="M61.911 45.2c4.982-.323 8.679-8.404 8.357-15.354-.321-7.111-4.661-10.505-9.643-10.343-4.982.323-9 4.202-8.518 11.313.322 7.111 4.822 14.707 9.804 14.384"></path>
                            <path d="M41.661 50.695c-4.5 2.263-11.732-2.747-14.946-9.212-3.214-6.303-1.286-11.475 3.214-13.737s9.804-.97 13.018 5.495c3.374 6.303 3.214 15.192-1.286 17.454"></path>
                            <path d="M169.429 153.806c-1.929-7.919-6.429-21.333-22.339-25.697-15.911-4.364-26.839 5.01-32.143 10.99-7.875 9.05-10.929 21.01-6.589 25.051 8.518 7.758 20.411 2.424 27.964 4.525 7.554 1.939 15.268 12.606 26.357 10.182 5.625-1.293 9-15.031 6.75-25.051"></path>
                            <path d="M171.357 140.877c2.732 3.394 10.286 1.778 14.946-2.263 4.661-3.879 4.821-8.727 1.929-12.121-2.732-3.394-7.554-4.04-12.214-.162-4.5 4.041-7.393 11.152-4.661 14.546"></path>
                            <path d="M119.607 126.978c-4.179 1.455-9.804-3.717-11.893-9.374-2.089-5.818.161-10.02 4.339-11.475 4.179-1.455 8.518.323 10.607 5.98 1.929 5.657.965 13.253-3.053 14.869"></path>
                            <path d="M158.5 125.847c4.5 2.263 11.732-2.747 14.946-9.212 3.214-6.303 1.286-11.475-3.214-13.737-4.5-2.263-9.804-.97-13.018 5.495-3.375 6.302-3.214 15.191 1.286 17.454"></path>
                            <path d="M138.25 120.352c-4.982-.323-8.679-8.404-8.357-15.354.321-7.111 4.661-10.505 9.643-10.343 4.982.323 9 4.202 8.518 11.313-.322 7.111-4.822 14.707-9.804 14.384"></path>
                        </g>
                    </svg>
                    <div class="card-body">
                        <h5 class="card-title">Much More...</h5>
                    </div>
                </div>
            </a>
            <div class="card notSeen fadeElement lastCard">
                <div class="card-body">
                    <h5 class="card-title">PROVIDING THE HIGHEST QUALITY PEST CONTROL SERVICES</h5>
                    <a href="services.php" class="btn btn-outline-dark">Read More</a>
                </div>
            </div>
        </div>
    </div>

    <div class="about">
        <p class="text-center bigText">About Beeline Pest Services NW</p>
        <!-- Using div as hr line instead of hr elements / hr element had muted colors -->
        <div class="hr"></div>
        <div class="aboutContent">
            <div>
                <p class="mediumText highlightText highlight">WITH OVER 30 YEARS EXPERIENCE</p>
                <p class="indent">Beeline Pest Services is a local company located in the heart of Thurston County. Robert and Janelle have worked in pest control for over 30 years, with multi-national companies and small startups, as technicians, managers, and consultants.</p>
                <a href="about.php" class="btn btn-outline-dark">Read More</a>
            </div>
            <img src="Resources/robert.jpeg" alt="Robert in crawlspace looking for pests.">
        </div>
    </div>

    <div class="reviews">
        <div class="row">
            <div class="col">
                <div class="card notSeen fadeElement">
                    <div class="card-body">
                        <p class="card-text">“No matter the pest, Beeline has been there for us for three generations. At this point, they're family.”</p>
                        <h5 class="card-title">S. Esap</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card notSeen fadeElement">
                    <div class="card-body">
                        <p class="card-text">“I tried four other companies before calling Beeline and still had ants. Since calling Beeline, we've been ant free for five years.”</p>
                        <h5 class="card-title">J. Hewley</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card notSeen fadeElement">
                    <div class="card-body">
                        <p class="card-text">“Calling Beeline was the best business decision I have made in years. They're always on time, always professional, always honest.”</p>
                        <h5 class="card-title">D. Moser</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card notSeen fadeElement">
                    <div class="card-body">
                        <p class="card-text">"I manage Emerald Car Care and we were having an issue with some Wasps, and Yellow Jackets last year that were not only being aggressive to our customer but also trying to create homes in some of the other vehicles staying here for days. This year I decided to call Beeline and I dont think I could tell you the last time I saw anything other than a honey bee on our property. Would and have 100% recommended to not only people I know but also my customers. Thank you Beeline."</p>
                        <h5 class="card-title">Emerald Car Care Service</h5>
                    </div>
                </div>
            </div>
            <div class="col lastReview">
                <div class="card notSeen fadeElement">
                    <div class="card-body">
                        <p class="card-text">"I just learned about their all year program, and all I can say is WOW, by far the easiest company I have ever had the privilege of working with, and the most effective actions taken on our horrible wasp problem. They are willing to inform you on everything and also willing to teach you about the process and how it works. I would give more stars if I could and I will be recommending everyone I know to give beeline there service!"</p>
                        <h5>B. Weston</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="whiteText">
        <div class="row">
            <p class="bigText yellowText">Beeline</p>
            <p class="mediumText">Pest Services NW</p>
        </div>
        <div class="hr"></div>
        <div class="row">
            <p>Contact Us</p>
            <div class="col">
                <p>Call: <a href="tel:360-894-4242">(360) 894-4242</a></p>
                <p>Email: <a href="mailto:info@beelinenw.com">info@beelinenw.com</a></p>
            </div>
            <div class="col">
                <p>Location: Yelm, Washington</p>
                <p>Serves the South Sound</p>
            </div>
            <div class="col">
                <p>Hours: Mon- Fri:<br>9am- 4pm<br>Saturday: By Appointment Only</p>
            </div>
        </div>
        <div class="hr"></div>
        <div class="row quotes">
            <p>For quotes or any inquiry, please contact us.</p>
            <form method="POST">
                <!-- Split into two different div's for flex styling -->
                <div>
                    <div class="form-group">
                        <label for="quote-firstName">First Name *</label>
                        <input type="text" name="quote-firstName" id="quote-firstName" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="quote-lastName">Last Name *</label>
                        <input type="text" name="quote-lastName" id="quote-lastName" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="quote-email">Email *</label>
                        <input type="email" name="quote-email" id="quote-email" class="form-control">
                    </div>
                </div>
                <div>
                    <div class="form-group">
                        <label for="quote-services">Service *</label>
                        <select name="quote-services" class="form-control" id="quote-services">
                            <option disabled selected>(Select One)</option>
                            <option value="Inspection">Pest Inspection</option>
                            <option value="Ants">Ant Services</option>
                            <option value="Rodents">Rodent Services</option>
                            <option value="Spiders">Spider Services</option>
                            <option value="Wasps/Hornets">Wasp / Hornet Service</option>
                            <option value="Flea/Ticks">Flea & Tick Services</option>
                            <option value="Cockroach">Cockroach Services</option>
                            <option value="Bedbugs">Bedbug Services</option>
                            <option value="Wildlife">Wildlife Management</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="quote-message">Additional Information:</label><br>
                        <textarea name="quote-message" id="quote-message"></textarea>
                    </div>
                </div>
                <button name="quoteForm" type="submit" class="btn btn-outline-light">Submit</button>
            </form>
        </div>
        <div class="hr"></div>
        <div class="row">
            <p class="text-center">© <span id="currentYear"></span> Beeline Pest Services NW ● Created by Scripted Remedies</p>
        </div>
    </footer>

    <script src="js/bootstrap.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>

<?php
include 'mail.php';

// Handles all quote forms
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['quoteForm'])) {

    $firstName = $_POST['quote-firstName'];
    $lastName = $_POST['quote-lastName'];
    $service = $_POST['quote-services'];
    $body = '<h3>You have a new Service Request</h3>
                       <h4>Full Name: '.$firstName.' '.$lastName.'</h4>
                       <h4>Email: '.$_POST['quote-email'].'</h4>
                       <h4>Service Requested: '.$service.'</h4>
                       <h4>Message: '.$_POST['quote-message'].'</h4>';
    echo "<script>";
    if (sendQuoteForm($firstName, $lastName, $service, $body)) {
        echo "Swal.fire({
                    title: 'Thank you!',
                    text: 'We have received your service request and will contact you soon.',
                    icon: 'success'
                })";
    } else {
        echo "Swal.fire({
                    title: 'Oh no!',
                    text: 'Your message could not be sent. Please try again later.',
                    icon: 'error'
                })";
    }
    echo "</script>";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['wasp-submit'])) {
    $firstName = $_POST['wasp-firstName'];
    $lastName = $_POST['wasp-lastName'];
    $body = '<h3>You have a new Wasp Baiting Inquiry</h3>
             <h4>Full Name: '.$firstName.' '.$lastName.'</h4>
             <h4>Email: '.$_POST['wasp-email'].'</h4>
             <h4>Current wasp situation: '.$_POST['wasp-siutation'].'</h4>
             <h4>Message: '.$_POST['wasp-message'].'</h4>';

    echo "<script>";
    if (sendQuoteForm($firstName, $lastName, 'Wasp', $body)) {
        echo "Swal.fire({
                    title: 'Thank you!',
                    text: 'We have received your wasp/yellow jacket request and will contact you soon.',
                    icon: 'success'
                })";
    } else {
        echo "Swal.fire({
                    title: 'Oh no!',
                    text: 'Your message could not be sent. Please try again later.',
                    icon: 'error'
                })";
    }
    echo "</script>";
}
?>


