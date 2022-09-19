<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Essential steps leading to your secure and healthy online presence.">
    <meta name="keywords"
        content="cyber security, e corp, Secure and sustainable digital identity, adam sochorec, Contemporary passwords, Generate yourself a powerful and unique password, Check the strength of your password, What is 2FA and why is essential, What is a SIM swapping, Social engineering vulnerability, passwoord managers ">
    <meta name="author" content="Adam Sochorec">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cyber security | Adam Sochorec</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets/php/"; include($IPATH."head-links.php"); ?>
</head>

<body id="cyber-security">
    <!-- HEADER START -->
    <header>
        <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets/php/"; include($IPATH."header-nav.php"); ?>
    </header>
    <!-- HEADER END -->
    <!-- SCROLL STATUS START -->
    <aside>
        <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets/php/"; include($IPATH."scroll-status.php"); ?>
    </aside>
    <!-- SCROLL STATUS END -->
    <main>
        <article class="wrapper standard">
            <h1 id="cyber-security" class="v1">Secure and sustainable digital identity</h1>
            <article>
                <div class="row hide">
                    <div class="col-4">
                        <div class="list-group" id="list-tab" role="tablist">
                            <a class="list-group-item list-group-item-action active" id="list-home-list"
                                data-bs-toggle="list" href="#list-home" role="tab"
                                aria-controls="list-home" aria-describedby="1.1">Contemporary passwords</a>
                            <a class="list-group-item list-group-item-action" id="list-profile-list"
                                data-bs-toggle="list" href="#list-profile" role="tab"
                                aria-controls="list-profile" aria-describedby="2.1">2FA</a>
                            <a class="list-group-item list-group-item-action" id="list-messages-list"
                                data-bs-toggle="list" href="#list-messages" role="tab"
                                aria-controls="list-messages" aria-describedby="3.1">Social engineering</a>
                            <a class="list-group-item list-group-item-action" id="list-settings-list"
                                data-bs-toggle="list" href="#list-settings" role="tab"
                                aria-controls="list-settings" aria-describedby="4.1">Related literature</a>
                        </div>
                    </div>
                    <div class="col-8 tab-content-hide">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="list-home" role="tabpanel"
                                aria-labelledby="list-home-list">
                                <ol class="content-list tab-content-link">
                                    <li><a href="#1.1" aria-describedby="1.1">Contemporary passwords <svg
                                                id="fa-chevron-right" width="8px" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 384 512">
                                                <path
                                                    d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                                            </svg></a></li>
                                    <li><a href="#1.2" aria-describedby="1.2">Password generator <svg
                                                id="fa-chevron-right" width="8px" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 384 512">
                                                <path
                                                    d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                                            </svg></a></li>
                                    <li><a href="#1.3" aria-describedby="1.3">Password strength <svg
                                                id="fa-chevron-right" width="8px" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 384 512">
                                                <path
                                                    d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                                            </svg></a></li>
                                    <li><a href="#1.4" aria-describedby="1.4">Problem solution <i
                                                class="fa-solid fa-screwdriver-wrench"></i> <svg
                                                id="fa-chevron-right" width="8px" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 384 512">
                                                <path
                                                    d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                                            </svg></a></li>
                                </ol>
                            </div>
                            <div class="tab-pane fade" id="list-profile" role="tabpanel"
                                aria-labelledby="list-profile-list">
                                <ol class="content-list">
                                    <li><a href="#2.1" aria-describedby="2.1">2FA <svg
                                                id="fa-chevron-right" width="8px" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 384 512">
                                                <path
                                                    d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                                            </svg></a></li>
                                    <li><a href="#2.2" aria-describedby="2.2">SIM swapping <svg
                                                id="fa-chevron-right" width="8px" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 384 512">
                                                <path
                                                    d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                                            </svg></a></li>
                                    <li><a href="#2.3" aria-describedby="2.3">Problem solution <i
                                                class="fa-solid fa-screwdriver-wrench"></i> <svg
                                                id="fa-chevron-right" width="8px" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 384 512">
                                                <path
                                                    d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                                            </svg></a></li>
                                </ol>
                            </div>
                            <div class="tab-pane fade" id="list-messages" role="tabpanel"
                                aria-labelledby="list-messages-list">
                                <ol class="content-list">
                                    <li><a href="#3.1" aria-describedby="3.1">Social engineering</a> <svg
                                            id="fa-chevron-right" width="8px" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 384 512">
                                            <path
                                                d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                                        </svg></li>
                                    <li><a href="#3.2" aria-describedby="3.2">Problem solution <i
                                                class="fa-solid fa-screwdriver-wrench"></i> <svg
                                                id="fa-chevron-right" width="8px" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 384 512">
                                                <path
                                                    d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                                            </svg></a></li>
                                </ol>
                            </div>
                            <div class="tab-pane fade" id="list-settings" role="tabpanel"
                                aria-labelledby="list-settings-list">
                                <ol class="content-list">
                                    <li><a href="#4.1" aria-describedby="4.1">Literature <svg
                                                id="fa-chevron-right" width="8px" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 384 512">
                                                <path
                                                    d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                                            </svg></a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <h3>Essential steps leading to your secure and healthy online presence.</h3>
            </article>
            <article>
                <section>
                    <hr id="1.1">
                    <h2>1.1 Contemporary passwords</h2>
                    <br>
                    <p>The most effective way how today to hack someone's identity is to "social engineer". That means
                        "guess" someone's password based on the target's public information (date of birth, postal code,
                        house number, etc.) usually on social sites.</p>
                    <p>By using complex not the organic password for all of your online accounts, you can drastically
                        reduce the risk of having your birthday on Facebook or tag the location of your hometown in an
                        Instagram post.</p>
                    <p>Another step forward to secure your online and offline identity, is using a unique password for
                        each account you own. That creates a powerful cascade of barriers that possible hackers might
                        cross pretty easily with a single or similar password.</p>
                    <p>To be able to manipulate a number of absolutely random characters from the keyboard you need a
                        reliable password manager. Does not matter how powerful and unique your passwords are when you
                        keep them in Excel spreadsheets on your work laptop...</p>
                    <hr id="1.2">
                    <h3>1.2 Generate yourself a powerful and unique password</h3>
                    <br>
                    <section>
                        <div class="inputBox flex-center">
                            <input type="text" placeholder="Your 124 bits password" id="password" readonly="">
                            <i class="fa-solid fa-clone" id="btnCopy"></i>
                            <div id="btn" onclick="getPassword();">generate password</div>
                    </section>
                    </div>
                </section>
                <section>
                    <hr id="1.3">
                    <h3>1.3 Check the strength of your password.</h3>
                    <br>
                    <p>Remember to not share your actual passwords.</p>
                    <div class="flex-center">
                        <iframe src="https://www.security.org/how-secure-is-my-password/" class="password-calculator"
                            scrolling="no" allowfullscreen>
                            <p class="placeholder">Online calculator measuring strength of your actual password</p>
                        </iframe>
                    </div>
                    <br>
                    <p>Contemporary password hacking is more about social engineering and working with the most commonly
                        used words/phrases in dictionaries, than processing-heavy combinatorics.</p>
                </section>
                <section>
                    <hr id="1.4">
                    <h3>1.4. Problem solution <i class="fa-solid fa-screwdriver-wrench"></i></h3>
                    <br>
                    <ol class="ul-content">
                        <li>Set-up a trusted and encrypted password manager:</li>
                        <ul>
                            <li><a href="https://www.apple.com/legal/privacy/data/en/icloud-keychain/">iCloud
                                    keychain</a> - Apple users</li>
                            <li><a href="https://www.lastpass.com/how-lastpass-works">LastPass</a> and <a
                                    href="https://www.keepersecurity.com/en_GB/">Keeper</a> - any kind of devices</li>
                        </ul>
                        <li>Generate powerful and unique passwords through your password manager or password generator
                        </li>
                        <li>Store them in your password manager</li>
                        <li>Remember master password to your manager or get a <a
                                href="https://www.tomsguide.com/news/usb-security-key">hardware key</a></li>
                    </ol>
                </section>
            </article>
            <article>
                <section>
                    <hr id="2.1">
                    <h2>2.1 What is 2FA and why is essential</h2>
                    <br>
                    <p>Two-factor authentication (2FA) is an additional security feature for logging into your online
                        accounts. 2FA is based on entering a single-use time-dependent code sent to you by SMS, email,
                        or verification app.</p>
                    <p>2FA usually works on top of standard login procedure (username and password), so if your account
                        info gets compromised, hacker still wouldn't access your account.</p>
                    <div class="flex-center">
                        <div class="tfa-grid">
                            <div class="grid-item">
                                <h1 class="tfa"><span class="tfaCode">902 844</span></h1>
                                <h1 class="tfa"><span class="tfaCode">024 930</span></h1>
                                <h1 class="tfa"><span class="tfaCode">056 929</span></h1>
                            </div>
                            <div class="grid-item">
                                <h1 class="tfa"><span class="tfaCodee">039 032</span></h1>
                                <h1 class="tfa"><span class="tfaCodee">983 230</span></h1>
                                <h1 class="tfa"><span class="tfaCodee">663 892</span></h1>
                            </div>
                            <div class="grid-item">
                                <h1 class="tfa"><span class="tfaCodeee">780 320</span></h1>
                                <h1 class="tfa"><span class="tfaCodeee">401 024</span></h1>
                                <h1 class="tfa"><span class="tfaCodeee">896 309</span></h1>
                            </div>
                            <div class="grid-item">
                                <h1 class="tfa"><span class="tfaCodeeee">930 324</span></h1>
                                <h1 class="tfa"><span class="tfaCodeeee">609 714</span></h1>
                                <h1 class="tfa"><span class="tfaCodeeee">595 469</span></h1>
                            </div>
                        </div>
                    </div>
                    <p><i class="note">Recovery 2FA codes</i></p>
                    <p>After successful 2FA activation, you might be shown a couple of six to eight-digit recovery
                        codes. In case you would lose access to your email and phone number, you still can manage your
                        online account by those single-use codes (after you use all of them, you will receive new ones).
                    </p>
                </section>
                <section>
                    <hr id="2.2">
                    <h3>2.2 What is a SIM swapping</h3>
                    <br>
                    <img src="/img/simswap3.webp"
                        alt="Diagram describing how SIM swap works: 1. Attackers collects data on victim (trough social media, phising, etc.) 2. Thief calls phone service provider, impersonates victim 3. Thief tricks carrier into switiching victim's mobile number to SIM card on thie's phone 4. Now, thief gets incoming calls and texts meant for the victim - including account access codes.">
                    <a href="https://www.snbonline.com/"><i class="note">https://www.snbonline.com/</i></a>
                    <br><br>
                    <p>You can easily avoid this by using a mobile app for 2FA that is independent of your phone number.
                        Most of the online services provide their own native app for 2FA or they support trusted third
                        party apps for secure two-factor authentication.</p>
                </section>
                <section>
                    <hr id="2.3">
                    <h3>2.3 Problem solution <i class="fa-solid fa-screwdriver-wrench"></i></h3>
                    <br>
                    <ol class="ul-content">
                        <li>Set-up a 2FA for your online accounts with 2FA support throught:</li>
                        <ul>
                            <li><a href="https://www.apple.com/legal/privacy/data/en/icloud-keychain/">iCloud
                                    keychain</a> - Apple users</li>
                            <li>Trusted third party 2FA app such as <a href="https://authy.com/">Authy</a>, <a
                                    href="https://www.lastpass.com/how-lastpass-works">LastPass</a> or <a
                                    href="https://www.keepersecurity.com/en_GB/">Keeper</a></li>
                            <li>Service's verification native app (f.e. Adobe - Account Access)</li>
                            <li>If the service does support any mentioned methods, use SMS verification</li>
                        </ul>
                    </ol>
                </section>
            </article>
            <article>
                <section>
                    <hr id="3.1">
                    <h2>3.1 Social engineering vulnerability</h2>
                    <br>
                    <p>Watch out for your online traces.</p>
                    <p>Set your personal information (such as birthday, year of graduation, etc.) as private or at least
                        not public (friends/followers) NO friends of friends (you do not control the information
                        accessibility scope!).</p>
                    <p>Do not pick your pin codes or passwords as keywords you published somewhere (pet's or child's
                        name).</p>
                    <p>When registering for a new online service, fill out only the required information. All your
                        published information might hackers use against you.</p>
                    <p>When installing a new app, checkout in settings its requests to read your data - decide which are
                        necessary for the app functionality.</p>
                    <p>For example, does your app for online shopping really needs access to your contact, and messages?
                    </p>
                    <p>By using random non-organic passwords will most personal information in the online space lose its
                        value (as a possible key to your sensitive data).</p>
                </section>
                <section>
                    <hr id="3.2">
                    <h3>3.2 Problem solution <i class="fa-solid fa-screwdriver-wrench"></i></h3>
                    <br>
                    <ol class="ul-content">
                        <li>Keep informations you publish about yourself under control, set required sensitive
                            informations visibility as private</li>
                        <li>Before fiilling out any informations about you, ask yourself if is it fundamental for
                            app/service functionality</li>
                        <li>Stick to the random non-organic passwords</li>
                        <li>Educate yourself about social engineering</li>
                    </ol>
                </section>
            </article>
            <article>
                <hr id="4.1">
                <h2>4.1 Related literature</h2>
                <br>
                <ol class="ul-content">
                    <li><a href="https://www.security.org/how-secure-is-my-password/">Password Strength Calculator <svg
                                id="fa-chevron-right" width="8px" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 384 512">
                                <path
                                    d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                            </svg></a>
                    </li>
                    <li><a href="https://www.omnicalculator.com/other/password-entropy">Password Entropy Calculator <svg
                                id="fa-chevron-right" width="8px" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 384 512">
                                <path
                                    d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                            </svg></a>
                    </li>
                    <li><a href="https://open.spotify.com/episode/5Snektk5Z2nUzM7DgoEBSx?si=eKX_d1f1SY6T3j5S3mkLgA">Hacking
                            backstage <svg
                                id="fa-chevron-right" width="8px" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 384 512">
                                <path
                                    d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                            </svg></a></li>
                    <li><a href="https://open.spotify.com/episode/2hJsSOoQkgnlQLEFrdBVFp?si=06ff9cdeb3da4cbc">Story
                            about professional social engineer <svg
                                id="fa-chevron-right" width="8px" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 384 512">
                                <path
                                    d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                            </svg></a></li>
                    <li><a href="https://authy.com/blog/authy-vs-google-authenticator/">Authy vs. Google
                            Authenticator <svg
                                id="fa-chevron-right" width="8px" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 384 512">
                                <path
                                    d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                            </svg></a></li>
                    <li><a href="https://open.spotify.com/episode/4q0cNkAHQQMBTu4NmeNW7E?si=a4c35c68a1d34724">Google's
                            control over the internet <svg
                                id="fa-chevron-right" width="8px" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 384 512">
                                <path
                                    d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                            </svg></a></li>
                </ol>
                <hr>
            </article>
        </article>
    </main>
    <!-- FOOTER START -->
    <footer>
        <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets/php/"; include($IPATH."footer.php"); ?>
    </footer>
    <!-- FOOTER END -->
</body>

</html>