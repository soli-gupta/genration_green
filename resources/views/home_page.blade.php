@extends('layouts.template_page')
@section('content')

<section class="banner-home">
    <div class="mcontainer">
        <div class="mcontainer margin-center banner-flex">
            <div class="banner-content">
                <p class="banner-title">
                   Generation Green Campaign
                </p>
                <p class="banner-para">Welcome to Generation Green Campaign (Gen G), inspiring and empowering youth to champion sustainability through green skills and actions. In a world where environmental concerns are paramount, Gen G campaign cultivates an eco-conscious mindset, equipping youth with the knowledge and skills to tackle environmental challenges.</p>
                <p class="banner-para">Generation G campaign focuses to empower youth to champion and advocate sustainability for a green future focusing on the dangers of e-waste and promoting a cleaner, healthier India.</p>
                <p class="banner-para">
                    <span>Take the pledge and join the Gen G campaign to make a difference for our planet.</span>
                </p>
                <p class="banner-para">
                    Together, we can build a cleaner, healthier India.
                </p>
                <div class="mcontainer bannner-btns">
                    <a href="/pledge" title="Take Pledge" class="common-btn type2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.424 3.25155C9.44283 -4.69107 -1.52894 3.41575 4.74743 11.5522C5.00405 10.7473 5.46166 10.0977 6.1373 9.5773L8.664 7.63292L8.85691 7.59613C9.29568 7.51268 9.74162 7.60151 10.0772 7.90658C10.3006 8.10847 10.437 8.3615 10.5034 8.63517C11.6196 7.75854 12.7358 6.88101 13.8511 6.00437C14.3598 5.60509 15.0202 5.51985 15.5963 5.82672C16.0117 6.04744 16.2881 6.40635 16.4083 6.80474C16.9458 6.73027 17.494 6.91959 17.8708 7.39873C18.4316 8.11296 18.2773 9.04791 17.634 9.63114C18.1104 10.0591 18.263 10.7294 18.0377 11.3045C18.7448 11.8653 18.7959 12.9573 18.0252 13.5621L11.6806 18.5491L13.424 20.2674L20.9323 12.8667C29.5847 4.33815 17.6187 -5.11997 13.424 3.25155ZM9.01035 8.40457L6.63977 10.2296C6.07 10.6675 5.70482 11.2032 5.50383 11.8932L4.94124 13.8214L4.41724 16.2063L7.34951 19.9381L8.22614 19.7658C8.75373 19.6626 9.18352 19.4652 9.60523 19.1332C12.2423 17.0605 14.8803 14.9878 17.5173 12.9151C18.1652 12.4064 17.4105 11.4454 16.7627 11.9551L13.2131 14.7447L13.0041 14.4782L17.0391 11.3063C17.7721 10.7303 16.9188 9.6446 16.1858 10.2206L12.1508 13.3925L11.9112 13.0874L17.022 9.07124C17.9417 8.34804 16.9664 7.10532 16.0458 7.82852L10.935 11.8456L10.6954 11.5405L15.3361 7.89313C16.175 7.23453 15.1988 5.99181 14.3598 6.65131C12.1346 8.39919 9.9103 10.148 7.68508 11.8967C7.46077 11.8151 7.55229 11.44 7.85646 11.2202L9.26876 10.1363C9.91569 9.53154 9.92017 8.2314 9.01035 8.40457ZM4.00181 16.5975L7.34771 20.8551L3.34591 24L0 19.7425L4.00181 16.5975Z" fill="white" />
                        </svg>
                        Take Pledge
                    </a>
                    <div class="pledge-count">
                        <div class="counters mcontainer">
                            <p data-count="{{$formattedCounter}}" class="counts">{{$formattedCounter}}</p>
                        </div>
                        <div class="countsubtext mcontainer">
                            <p>Pledge Taken So far</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-carousel">
                <div class="car-btn btn-prev">
                    <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56" fill="none">
                        <rect x="0.5" y="0.5" width="55" height="55" rx="27.5" stroke="white" />
                        <path d="M22 29.1957V26.8043L34 17V20.8261L24.795 27.9402L24.8696 27.7011V28.2989L24.795 28.0598L34 35.1739V39L22 29.1957Z" fill="white" />
                    </svg>
                </div>
                <div class="banner-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="banner-card">
                                <p>“AICTE is proud to join hands with OPPO India for the Green Internship Programme. It is a fantastic opportunity for students to develop their green skills and contribute towards building an eco-friendly world.”
                                </p>
                                <div class="name-box">
                                    <img src="./assets/images/tg-sitharam.svg" alt="" />
                                    <div class="name-desig">
                                        <p>Dr. T.G. Sitharam</p>
                                        <p class="designation">Chairman, AICTE</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="banner-card">
                                <p>“At OPPO India, we are committed to empowering youth to become responsible citizens and catalysts for positive change. In the face of urgent climate challenges, those proficient in green skills are vital for a sustainable future, being better prepared for evolving job markets, while mitigating environmental risks and fostering community resilience.”
                                </p>
                                <div class="name-box">
                                    <img src="./assets/images/rakesh-bhardwaj.svg" alt="" />
                                    <div class="name-desig">
                                    <p>Rakesh Bhardwaj</p>
                                    <p class="designation">Head of Public Affairs,<br>OPPO India Mobiles Pvt Ltd</p>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="campaign">
    <div class="mcontainer logosbx">
        <div class="logos-box">
            <img src="./assets/images/1M1B.png" alt="" />
            <img src="./assets/images/AICTE-Logo.png" alt="" />
            <img src="./assets/images/oppo.svg" alt="" />
        </div>
    </div>
    <div class="mcontainer campscontent">
        <div class="w90 margin-center">
            <div class="common-headings center-text margin-center">
                <p class="common-title">
                    Campaign Themes
                </p>
                <!--  <p class="common-subtext">
                    Forem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit
                    interdum, ac aliquet odio mattis.
                </p> -->
            </div>
            <div class="campaign-cards-flex">
                <div class="camp-card">
                    <img src="./assets/images/sustainability.jpg" alt="Sustainability" />
                    <div class="capm-card-text">
                        <p class="camp-title">Sustainability</p>
                        <p class="camp-subtext">Sustainability means meeting current needs without compromising future generations. The UN's sustainable development goals unite 193 countries for global improvement by 2030.
                        </p>
                        <a href="https://youtube.com/watch?v=M-iJM02m_Hg" target="_blank" title="Explore More" class="common-btn">
                            Explore More
                        </a>
                    </div>
                </div>
                <div class="camp-card">
                    <img src="./assets/images/ewasten.png" alt="E-Waste Management" />
                    <div class="capm-card-text">
                        <p class="camp-title">E-Waste Management</p>
                        <p class="camp-subtext">Do you know that 20-50 million metric tons of e-waste are discarded yearly? Learn how to reduce your footprint and make positive changes.
                        </p>
                        <a href="https://www.youtube.com/watch?v=q6cWf-edwKE" title="Explore More" target="_blank" class="common-btn">
                            Explore More
                        </a>
                    </div>
                </div>
                <div class="camp-card">
                    <img src="./assets/images/climate.jpg" alt="Climate Action" />
                    <div class="capm-card-text">
                        <p class="camp-title">Climate Action</p>
                        <p class="camp-subtext">We're consuming resources rapidly, and climate change is  threatening our environment. Climate action combats these issues—make changes, not excuses, today!</p>
                        <a href="https://www.youtube.com/watch?v=G4H1N_yXBiA&ab_channel=NationalGeographic" title="Explore More" target="_blank" class="common-btn">
                            Explore More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="become-hero">
    <div class="mcontainer become-content-main">
        <div class="w90 margin-center">
            <div class="common-headings center-text margin-center">
                <p class="common-title">
                    Join Us To Become A<br> Generation Green Hero
                </p>
                <p class="common-subtext">
                    Gear up for the ultimate eco-adventure with the Gen G Campaign 2024! Join us to:
                </p>
            </div>
            <div class="mcontainer become-flex">
                <div class="img-side-bec">
                    <img src="./assets/images/green-hero2.png" alt="" />
                </div>
                <div class="become-content">
                    <div class="become-card">
                        <img src="./assets/images/ignite.svg" alt="Ignite" />
                        <div class="become-txts">
                            <p class="become-title">
                                Ignite
                            </p>
                            <p class="become-para">
                                Dive into sustainability challenges and fun activities.
                            </p>
                            <p class="become-para">
                                Join us to discover incredible initiatives driving sustainability awareness within the Gen G campaign!
                            </p>
                        </div>
                    </div>
                    <div class="become-card">
                        <img src="./assets/images/learn.svg" alt="Learn" />
                        <div class="become-txts">
                            <p class="become-title">
                                Learn
                            </p>
                            <p class="become-para">
                                Level up with bite-sized lessons on green skills, sustainability and e-waste.
                            </p>
                            <p class="become-para">
                                Discover top tips for spreading environmental love.
                            </p>
                        </div>
                    </div>
                    <div class="become-card">
                        <img src="./assets/images/challenge.svg" alt="Compete" />
                        <div class="become-txts">
                            <p class="become-title">
                                Compete
                            </p>
                            <p class="become-para">
                                Enter the Gen G Challenge
                            </p>
                            <p class="become-para">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="#2F455C" />
                                    <path d="M9 12L11 14L15 10" stroke="white" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                </svg> Gen G Media Superstar
                            </p>
                            <p class="become-para">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="#2F455C" />
                                    <path d="M9 12L11 14L15 10" stroke="white" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                </svg> Gen G Innovation Challenge
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="connect mcontainer">
        <svg width="1440" height="206" viewBox="0 0 1440 206" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g opacity="0.15" clip-path="url(#clip0_79_19823)">
                <path d="M648.068 56.6917L651.235 70.625L730.041 53.0982L726.874 39.165L648.068 56.6917Z" fill="#2DC84D" />
                <path d="M743.926 114.351L740.763 100.417L661.954 117.93L665.117 131.864L743.926 114.351Z" fill="#2DC84D" />
                <path d="M675.222 20.7596L653.982 25.4834L683.985 157.512L705.224 152.789L675.222 20.7596Z" fill="#21CFB3" />
                <path d="M1455 125.958V131.294C1439.96 134.845 1424.4 139.778 1408.34 146.055C1393.16 152.005 1377.1 155.749 1362.33 158.148C1362.2 158.148 1362.06 158.186 1361.95 158.205C1361.63 158.244 1361.36 158.301 1361.07 158.34C1344.62 160.931 1329.89 161.814 1320.09 162.083C1319.82 162.083 1319.59 162.083 1319.32 162.083C1318.95 162.083 1318.58 162.083 1318.21 162.121C1317.77 162.121 1317.36 162.14 1316.93 162.14C1316.35 162.14 1315.77 162.14 1315.22 162.14C1314.23 162.14 1313.34 162.14 1312.55 162.14C1309.52 162.14 1307.79 162.064 1307.7 162.064C1301.7 161.929 1296.21 160.528 1291.03 158.09C1286.35 155.902 1281.91 152.908 1277.54 149.241C1274.46 146.65 1271.43 143.732 1268.39 140.546C1268.23 140.393 1268.09 140.258 1267.96 140.105C1267.75 139.893 1267.55 139.663 1267.36 139.471C1267.09 139.183 1266.85 138.934 1266.6 138.646C1264.6 136.496 1262.58 134.269 1260.57 131.928C1260.28 131.582 1260 131.256 1259.71 130.91C1256.4 127.052 1253.02 122.983 1249.51 118.721C1226.55 90.9464 1197.97 56.3955 1145.55 33.2081C1129.5 26.1251 1111.92 21.2496 1092.87 18.6007C1092.62 18.5623 1092.37 18.5239 1092.11 18.5048C1089.92 18.1784 1087.73 17.9289 1085.48 17.6986C1084.66 17.6026 1083.81 17.5066 1082.97 17.4298C1082.08 17.3339 1081.19 17.2571 1080.3 17.1803C1079.54 17.1035 1078.76 17.0459 1077.99 16.9884C1041.94 14.2051 1001 18.7735 955.422 30.6743C954.569 30.9047 953.715 31.1158 952.861 31.327C952.376 31.4613 951.911 31.5957 951.426 31.7301C950.3 32.0372 949.155 32.3443 948.03 32.6514C945.915 33.2273 943.82 33.8415 941.705 34.4557C941.453 34.5133 941.22 34.5901 940.967 34.6669C930.024 37.834 918.79 41.4043 907.323 45.3585C904.316 46.395 901.968 47.2204 900.397 47.681C885.884 52.1919 873.738 54.668 864.211 55.9925C862.212 56.2804 860.311 56.4915 858.545 56.6835C856.489 56.8946 854.587 57.0674 852.841 57.1633C844.304 57.7008 839.647 57.1633 839.24 57.125L839.88 51.9615C839.88 51.9615 844.032 52.403 851.657 51.9615C853.365 51.8463 855.286 51.6928 857.381 51.5008C859.127 51.3089 861.029 51.0786 863.047 50.829C872.399 49.5622 884.428 47.1628 898.825 42.6904C900.3 42.2297 902.628 41.4235 905.577 40.387C912.95 37.8341 924.863 33.7071 939.881 29.3499C943.664 28.2558 947.661 27.1425 951.813 26.0484C952.182 25.9332 952.512 25.8372 952.881 25.7604C968.189 21.7103 985.807 17.7945 1004.65 15.0113C1031.5 11.0379 1056.53 10.0014 1079.58 11.9017C1079.85 11.9017 1080.08 11.9017 1080.36 11.9593C1084.57 12.3048 1088.68 12.7463 1092.73 13.3029C1112.7 15.9902 1131.09 21.0193 1147.74 28.3901C1201.33 52.0767 1230.32 87.165 1253.62 115.343C1257.52 120.065 1261.21 124.518 1264.76 128.645C1265.17 129.087 1265.55 129.547 1265.94 130.008C1266.81 131.006 1267.67 131.966 1268.52 132.907C1268.72 133.137 1268.93 133.348 1269.1 133.578C1270.04 134.596 1270.95 135.575 1271.86 136.534C1272.32 137.053 1272.83 137.571 1273.35 138.07C1276.4 141.237 1279.41 144.059 1282.47 146.477C1286.8 149.952 1291.22 152.639 1295.86 154.405C1299.68 155.844 1303.66 156.689 1307.91 156.766C1308.04 156.766 1310.8 156.862 1315.53 156.804C1317.75 156.804 1320.38 156.727 1323.39 156.612C1324.44 156.555 1325.57 156.516 1326.69 156.459C1335.48 156.017 1346.73 155.115 1359.05 153.234C1359.4 153.176 1359.75 153.119 1360.1 153.08C1360.2 153.08 1360.3 153.042 1360.37 153.023C1375.12 150.7 1391.26 146.996 1406.44 141.064C1423.16 134.519 1439.38 129.451 1455.04 125.804L1455 125.958Z" fill="#21CFB3" />
                <path d="M800.9 1.05683L758.913 10.3856L786.736 132.83L828.724 123.501C852.356 118.242 867.218 95.0352 861.902 71.6366L853.326 33.8802C848.01 10.5007 824.552 -4.20258 800.9 1.05683Z" fill="#21CFB3" />
                <path d="M855.656 69.7198L866.731 67.2588L859.565 35.7017L848.491 38.1627L855.656 69.7198Z" fill="#21CFB3" />
                <path d="M631.963 94.1506L631.09 99.8515C630.721 99.7939 591.761 95.2447 530.429 161.083C516.77 175.748 497.309 182.409 472.551 180.873C424.414 177.898 372.279 144.806 356.116 122.386C345.057 107.088 331.999 99.0645 317.253 98.5462C289.624 97.5865 254.583 122.194 213.042 171.775C199.188 188.302 187.101 196.018 176.119 195.27C161.334 194.291 151.283 178.416 141.563 163.06C131.92 147.8 121.947 132.041 107.977 130.986C96.5682 130.16 83.0446 138.894 66.6883 157.743C40.7082 187.688 11.2551 203.85 -20.8562 205.788C-23.0875 205.923 -25.2994 205.999 -27.4919 205.999C-58.2449 205.999 -84.2832 193.235 -99.9993 183.196V176.171C-84.3608 186.613 -55.0435 202.122 -21.1472 200.049C9.29543 198.187 37.371 182.697 62.2645 154C79.9208 133.654 95.016 124.248 108.423 125.246C125.323 126.513 136.091 143.539 146.51 160.008C155.843 174.789 164.671 188.743 176.507 189.511C185.49 190.106 195.987 183.1 208.56 168.109C251.925 116.359 287.509 91.6937 317.467 92.7878C334.095 93.3828 348.705 102.212 360.851 119.046C375.985 140.027 427.169 172.312 472.92 175.134C495.815 176.535 513.743 170.508 526.161 157.168C589.917 88.7376 630.275 93.9011 631.963 94.1506Z" fill="#21CFB3" />
                <path d="M648.434 160.412L690.422 151.083L662.598 28.6387L620.611 37.9674C596.979 43.2268 582.116 66.4335 587.433 89.8321L596.009 127.589C601.325 150.968 624.802 165.671 648.434 160.412Z" fill="#21CFB3" />
                <path d="M593.695 91.7538L582.62 94.2148L589.785 125.772L600.86 123.311L593.695 91.7538Z" fill="#21CFB3" />
            </g>
            <defs>
                <clipPath id="clip0_79_19823">
                    <rect width="1555" height="206" fill="white" transform="translate(-100)" />
                </clipPath>
            </defs>
        </svg>
    </div>
</section>
<section class="cta-box">
    <div class="mcontainer cta-main-box">

        <div class="cta-content">
            <p class="cta-title">
                Act Now! For help with e-waste management, Call the helpline
            </p>
            <p class="cta-para">
                Together, let's protect the environment by properly disposing of and recycling electronic devices.
            </p>
            <a href="tel:18001025018" title="Call the helpline" class="cta-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42" fill="none">
                    <path d="M24.5875 3.50017C28.1545 3.87602 31.4863 5.45807 34.032 7.98468C36.5777 10.5113 38.1848 13.8311 38.5875 17.3952M24.5875 10.5002C26.3086 10.8396 27.888 11.6885 29.1207 12.9367C30.3533 14.185 31.1823 15.7749 31.5 17.5002M38.5 29.6102V34.8602C38.502 35.3475 38.4021 35.83 38.2069 36.2765C38.0116 36.7231 37.7253 37.1239 37.3661 37.4534C37.007 37.7829 36.583 38.0338 36.1213 38.1899C35.6596 38.346 35.1704 38.404 34.685 38.3602C29.3 37.775 24.1273 35.9349 19.5825 32.9877C15.3542 30.3008 11.7693 26.716 9.0825 22.4877C6.12497 17.9223 4.28443 12.7244 3.71001 7.31517C3.66627 6.83124 3.72379 6.3435 3.87888 5.88301C4.03398 5.42252 4.28325 4.99938 4.61085 4.64051C4.93844 4.28164 5.33716 3.99491 5.78164 3.79858C6.22611 3.60226 6.7066 3.50063 7.19251 3.50017H12.4425C13.2918 3.49181 14.1151 3.79256 14.7591 4.34635C15.403 4.90015 15.8236 5.6692 15.9425 6.51017C16.1641 8.19029 16.575 9.83994 17.1675 11.4277C17.403 12.054 17.4539 12.7348 17.3143 13.3892C17.1748 14.0436 16.8505 14.6444 16.38 15.1202L14.1575 17.3427C16.6487 21.7239 20.2763 25.3514 24.6575 27.8427L26.88 25.6202C27.3558 25.1497 27.9565 24.8254 28.611 24.6858C29.2654 24.5463 29.9461 24.5972 30.5725 24.8327C32.1602 25.4251 33.8099 25.8361 35.49 26.0577C36.3401 26.1776 37.1165 26.6058 37.6714 27.2608C38.2264 27.9158 38.5213 28.7519 38.5 29.6102Z" stroke="#2F455C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                18001025018
            </a>
        </div>
        <div class="cta-img"></div>
    </div>
</section>

<div class="mcontainer socials-footer">
            <div class="common-headings center-text margin-center">
                <p class="common-title">
                    Follow Us On Social
                </p>
            </div>
            <ul class="social-links">
                <li>
                    <a href="https://x.com/OPPOIndia" target="_blank" title="X">
                        <img src="./assets/images/x.png" alt="X" />
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/1m1bfoundation?igsh=MXU4dzd5am0zYWI4bw==" title="Instagram" target="_blank">
                        <img src="./assets/images/instagram.png" alt="Instagram" />
                    </a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/company/oppo-india/" title="Linkedin" target="_blank">
                        <img src="./assets/images/linkedin.png" alt="Linkedin" />
                    </a>
                </li>
            </ul>
        </div>


<style type="text/css">
    footer {
  margin-top: 0px;
}
</style>
@endsection