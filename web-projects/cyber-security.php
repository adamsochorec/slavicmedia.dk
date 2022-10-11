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
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-head.php';
    ?>
</head>

<body id="cyber-security">
    <!-- HEADER START -->
    <header>
        <?php
        $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
        include $IPATH . 'global-nav-bar.php';
        ?>
    </header>
    <!-- HEADER END -->
    <aside class="table-of-contents">
        <!-- SCROLL STATUS -->
        <?php
        $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
        include $IPATH . 'global-progress-bar.php';
        ?>
    </aside>
    <main>
        <article>
            <h1 class="page-start-margin">Secure and sustainable digital identity</h1>
            <br>
            <h3>Essential steps leading to your secure and healthy online presence.</h3>
            <hr>
            <section>
                <h2>1. Contemporary passwords</h2>
                <br>
                <p>The most effective way how today to hack someone's identity is to "social engineer". That
                    means
                    "guess" someone's password based on the target's public information (date of birth,
                    postal
                    code,
                    house number, etc.) usually on social sites.<br>By using complex not the organic password for
                    all of
                    your online accounts, you can drastically reduce the risk of having your birthday on Facebook or tag
                    the location of your hometown in an Instagram post.<br><br>Another step forward to secure your
                    online
                    and offline identity, is using a unique password for each account you own. That creates a powerful
                    cascade of barriers that possible hackers might cross pretty easily with a single or similar
                    password.<br>To be able to manipulate a number of absolutely random characters from the keyboard
                    you
                    need a
                    reliable password manager. Does not matter how powerful and unique your passwords are when you keep
                    them in Excel spreadsheets on your work laptop...</p>
                <hr>
                <h3>1.2 Generate yourself a powerful and unique password</h3>
                <br><br>
                <section class="btn-area flex-center">
                    <input type="text" placeholder="Your 124 bits password" id="password" readonly="">
                    <br>
                    <div id="btn" onclick="getPassword();"></div>
                    <div class="btn-shadow"></div>
                </section>
                <hr>
                <section>
                    <h3>1.3 Check the strength of your password.</h3>
                    <br>
                    <p>Contemporary password hacking is more about social engineering and working with the most commonly
                        used words/phrases in dictionaries, than processing-heavy combinatorics.<br><br>
                    <p>Try out the password strenght calculator bellow, do not share your actual passwords!</p>
                    <br>
                    <div class="flex-center">
                        <iframe src="https://www.security.org/how-secure-is-my-password/"
                            class="password-calculator"
                            scrolling="no" allowfullscreen>
                            <p class="alt-alt">Online calculator measuring strength of your actual
                                password
                            </p>
                        </iframe>
                    </div>
                    <br>
                </section>
                <hr>
                <section>
                    <h3>1.4 Problem solution <svg id="screwdriver-wrench" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512">
                            <path
                                d="M78.6 5C69.1-2.4 55.6-1.5 47 7L7 47c-8.5 8.5-9.4 22-2.1 31.6l80 104c4.5 5.9 11.6 9.4 19 9.4h54.1l109 109c-14.7 29-10 65.4 14.3 89.6l112 112c12.5 12.5 32.8 12.5 45.3 0l64-64c12.5-12.5 12.5-32.8 0-45.3l-112-112c-24.2-24.2-60.6-29-89.6-14.3l-109-109V104c0-7.5-3.5-14.5-9.4-19L78.6 5zM19.9 396.1C7.2 408.8 0 426.1 0 444.1C0 481.6 30.4 512 67.9 512c18 0 35.3-7.2 48-19.9L233.7 374.3c-7.8-20.9-9-43.6-3.6-65.1l-61.7-61.7L19.9 396.1zM512 144c0-10.5-1.1-20.7-3.2-30.5c-2.4-11.2-16.1-14.1-24.2-6l-63.9 63.9c-3 3-7.1 4.7-11.3 4.7H352c-8.8 0-16-7.2-16-16V102.6c0-4.2 1.7-8.3 4.7-11.3l63.9-63.9c8.1-8.1 5.2-21.8-6-24.2C388.7 1.1 378.5 0 368 0C288.5 0 224 64.5 224 144l0 .8 85.3 85.3c36-9.1 75.8 .5 104 28.7L429 274.5c49-23 83-72.8 83-130.5zM104 432c0 13.3-10.7 24-24 24s-24-10.7-24-24s10.7-24 24-24s24 10.7 24 24z" />
                        </svg></h3>
                    <br>
                    <ol>
                        <li>Set-up a trusted and encrypted password manager:</li>
                        <ul>
                            <li><a href="https://www.apple.com/legal/privacy/data/en/icloud-keychain/">iCloud
                                    keychain</a> - Apple users</li>
                            <li><a href="https://www.lastpass.com/how-lastpass-works">LastPass</a> and <a
                                    href="https://www.keepersecurity.com/en_GB/">Keeper</a> - any kind of
                                devices
                            </li>
                        </ul>
                        <li>Generate powerful and unique passwords through your password manager or password
                            generator
                        </li>
                        <li>Store them in your password manager</li>
                        <li>Remember master password to your manager or get a <a
                                href="https://www.tomsguide.com/news/usb-security-key">hardware key</a></li>
                    </ol>
                </section>
                <hr>
                <section>
                    <h2>2.1 What is 2FA and why is essential</h2>
                    <br>
                    <p>Two-factor authentication (2FA) is an additional security feature for logging into your
                        online
                        accounts. 2FA is based on entering a single-use time-dependent code sent to you by SMS,
                        email,
                        or verification app.<br><br>2FA usually works on top of standard login procedure (username and
                        password), so if your account info gets compromised, hacker still wouldn't access your account.
                    </p><br>
                    <div class="grid-container">
                        <div>
                            <p><span class="tfaOne">902 844</span></p>
                            <p><span class="tfaOne">024 930</span></p>
                            <p><span class="tfaOne">056 929</span></p>
                        </div>
                        <div>
                            <p><span class="tfaTwo">039 032</span></p>
                            <p><span class="tfaTwo">983 230</span></p>
                            <p><span class="tfaTwo">663 892</span></p>
                        </div>
                        <div>
                            <p><span class="tfaThree">780 320</span></p>
                            <p><span class="tfaThree">401 024</span></p>
                            <p><span class="tfaThree">896 309</span></p>
                        </div>
                        <div>
                            <p><span class="tfaFour">930 324</span></p>
                            <p><span class="tfaFour">609 714</span></p>
                            <p><span class="tfaFour">595 469</span></p>
                        </div>
                    </div>
                    <p><i class="note">Recovery 2FA codes</i><br><br>After successful 2FA activation, you might be shown
                        a
                        couple of six to eight-digit recovery
                        codes. In case you would lose access to your email and phone number, you still can manage your
                        online account by those single-use codes (after you use all of them, you will receive new
                        ones).
                    </p>
                </section>
                <hr>
                <section>
                    <h3>2.2 What is a SIM swapping</h3>
                    <br>
                    <picture>
                        <source srcset="/img/avif/simswap.avif" type="image/avif">
                        <img src="/img/jpg/simswap.png"
                            alt="Diagram describing how SIM swap works: 1. Attackers collects data on victim (trough social media, phising, etc.) 2. Thief calls phone service provider, impersonates victim 3. Thief tricks carrier into switiching victim's mobile number to SIM card on thie's phone 4. Now, thief gets incoming calls and texts meant for the victim - including account access codes.">
                    </picture>
                    <p><i class="note">Source: <a
                                href="https://www.snbonline.com/">https://www.snbonline.com/</a></i><br><br>You can
                        easily
                        avoid this by using a mobile app for 2FA that is independent of your phone
                        number.
                        Most of the online services provide their own native app for 2FA or they support trusted
                        third
                        party apps for secure two-factor authentication.</p>
                </section>
                <hr>
                <section>
                    <h3>2.3 Problem solution <svg id="screwdriver-wrench" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512">
                            <path
                                d="M78.6 5C69.1-2.4 55.6-1.5 47 7L7 47c-8.5 8.5-9.4 22-2.1 31.6l80 104c4.5 5.9 11.6 9.4 19 9.4h54.1l109 109c-14.7 29-10 65.4 14.3 89.6l112 112c12.5 12.5 32.8 12.5 45.3 0l64-64c12.5-12.5 12.5-32.8 0-45.3l-112-112c-24.2-24.2-60.6-29-89.6-14.3l-109-109V104c0-7.5-3.5-14.5-9.4-19L78.6 5zM19.9 396.1C7.2 408.8 0 426.1 0 444.1C0 481.6 30.4 512 67.9 512c18 0 35.3-7.2 48-19.9L233.7 374.3c-7.8-20.9-9-43.6-3.6-65.1l-61.7-61.7L19.9 396.1zM512 144c0-10.5-1.1-20.7-3.2-30.5c-2.4-11.2-16.1-14.1-24.2-6l-63.9 63.9c-3 3-7.1 4.7-11.3 4.7H352c-8.8 0-16-7.2-16-16V102.6c0-4.2 1.7-8.3 4.7-11.3l63.9-63.9c8.1-8.1 5.2-21.8-6-24.2C388.7 1.1 378.5 0 368 0C288.5 0 224 64.5 224 144l0 .8 85.3 85.3c36-9.1 75.8 .5 104 28.7L429 274.5c49-23 83-72.8 83-130.5zM104 432c0 13.3-10.7 24-24 24s-24-10.7-24-24s10.7-24 24-24s24 10.7 24 24z" />
                        </svg></h3>
                    <br>
                    <p>
                    <ol>
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
                <hr>
                <section>
                    <h2>3. Social engineering vulnerability</h2>
                    <br>
                    <p>Watch out for your online traces. Set your personal information (such as birthday, year of
                        graduation, etc.) as private or
                        at
                        least
                        not public (friends/followers) NO friends of friends (you do not control the information
                        accessibility scope!).<br>Do not pick your pin codes or passwords as keywords you published
                        somewhere (pet's or
                        child's
                        name).<br>When registering for a new online service, fill out only the required information.
                        All
                        your
                        published information might hackers use against you.<br>When installing a new app, checkout
                        in settings its requests to read your data - decide
                        which
                        are
                        necessary for the app functionality.<br>For example, does your app for online shopping
                        really needs access to your contact, and
                        messages?<br>By using random non-organic passwords will most personal information in the
                        online space
                        lose
                        its
                        value (as a possible key to your sensitive data).</p>
                </section>
                <hr>
                <section>
                    <h3>3.2 Problem solution <svg id="screwdriver-wrench" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512">
                            <path
                                d="M78.6 5C69.1-2.4 55.6-1.5 47 7L7 47c-8.5 8.5-9.4 22-2.1 31.6l80 104c4.5 5.9 11.6 9.4 19 9.4h54.1l109 109c-14.7 29-10 65.4 14.3 89.6l112 112c12.5 12.5 32.8 12.5 45.3 0l64-64c12.5-12.5 12.5-32.8 0-45.3l-112-112c-24.2-24.2-60.6-29-89.6-14.3l-109-109V104c0-7.5-3.5-14.5-9.4-19L78.6 5zM19.9 396.1C7.2 408.8 0 426.1 0 444.1C0 481.6 30.4 512 67.9 512c18 0 35.3-7.2 48-19.9L233.7 374.3c-7.8-20.9-9-43.6-3.6-65.1l-61.7-61.7L19.9 396.1zM512 144c0-10.5-1.1-20.7-3.2-30.5c-2.4-11.2-16.1-14.1-24.2-6l-63.9 63.9c-3 3-7.1 4.7-11.3 4.7H352c-8.8 0-16-7.2-16-16V102.6c0-4.2 1.7-8.3 4.7-11.3l63.9-63.9c8.1-8.1 5.2-21.8-6-24.2C388.7 1.1 378.5 0 368 0C288.5 0 224 64.5 224 144l0 .8 85.3 85.3c36-9.1 75.8 .5 104 28.7L429 274.5c49-23 83-72.8 83-130.5zM104 432c0 13.3-10.7 24-24 24s-24-10.7-24-24s10.7-24 24-24s24 10.7 24 24z" />
                        </svg></h3>
                    <br>
                    <ol>
                        <li>Keep informations you publish about yourself under control, set required sensitive
                            informations visibility as private</li>
                        <li>Before filling out any informations about you, ask yourself if is it fundamental
                            for
                            app/service functionality</li>
                        <li>Stick to the random non-organic passwords</li>
                        <li>Educate yourself about social engineering</li>
                    </ol>
                </section>
                <hr>
                <section>
                    <h2>4. Related literature</h2>
                    <br>
                    <ol>
                        <li><a href="https://www.security.org/how-secure-is-my-password/">Password Strength
                                Calculator
                                <svg class="hide" id="chevron-right" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 384 512">
                                    <path
                                        d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                                </svg></a>
                        </li>
                        <li><a href="https://www.omnicalculator.com/other/password-entropy">Password Entropy
                                Calculator
                                <svg class="hide" id="chevron-right" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 384 512">
                                    <path
                                        d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                                </svg>
                            </a>
                        </li>
                        <li><a
                                href="https://open.spotify.com/episode/5Snektk5Z2nUzM7DgoEBSx?si=eKX_d1f1SY6T3j5S3mkLgA">Hacking
                                backstage <svg class="hide" id="chevron-right" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 384 512">
                                    <path
                                        d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                                </svg>
                            </a>
                        </li>
                        <li><a href="https://open.spotify.com/episode/2hJsSOoQkgnlQLEFrdBVFp?si=06ff9cdeb3da4cbc">Story
                                about professional social engineer <svg class="hide" id="chevron-right"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 384 512">
                                    <path
                                        d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                                </svg>
                            </a>
                        </li>
                        <li><a href="https://authy.com/blog/authy-vs-google-authenticator/">Authy vs. Google
                                Authenticator <svg class="hide" id="chevron-right" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 384 512">
                                    <path
                                        d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                                </svg>
                            </a>
                        </li>
                        <li><a href="https://open.spotify.com/episode/4q0cNkAHQQMBTu4NmeNW7E?si=a4c35c68a1d34724">Google's
                                control over the internet <svg class="hide" id="chevron-right"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 384 512">
                                    <path
                                        d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                                </svg>
                            </a>
                        </li>
                    </ol>
                    <hr>
                </section>
        </article>
    </main>
    <!-- FOOTER START -->
    <footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="/js/cyber-security.js" defer></script>
        <?php
        $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
        include $IPATH . 'global-footer.php';
        ?>
    </footer>
    <!-- FOOTER END -->
</body>

</html>