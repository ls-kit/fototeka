@extends('frontend.layout.app')
@section('content')

    <!-- --------------------------------------------------------------------------------------- -->
    <!-- ARTIKULLI https://fototeka.al/singleCategory/7 Petro Dhimitri,“Driteσkroηesi” i harruar -->
    <!-- --------------------------------------------------------------------------------------- -->


    <style>
        @font-face{font-family:"simoncini-garamond-std-roman";src:url("/assets/frontend/SimonciniGaramondStd.otf") format("woff"),url("/assets/frontend/SimonciniGaramondStd.otf") format("opentype"),url("/assets/frontend/SimonciniGaramondStd.otf") format("truetype");}
        .article-font-style{
            font-family: Georgia, serif;
        }

        /*Banner */

        .article_banner{
            height: 100vh;
            width: 100%;
        }
        .article_banner_image {
            height: 80vh;
            width: 100%;
        }
        .article_banner_image > img{
            width: 100%;
        }
        .article_banner_title_section .a_b_left_content > p > i{
            font-size: 12px;
        }
        .article_banner_title_section .a_b_left_content .a_b_left_content_bottom{
            margin-top: 40px;
        }
        .article_banner_title_section .a_b_left_content .a_b_left_content_bottom > u{
            font-size: 16px;
            text-decoration-color: #A1845C;
            text-underline-offset: 4px;
        }
        .article_banner_title_section .a_b_left_content .a_b_left_content_bottom .a_b_left_content_bottom_socials > i{
            height: 22px;
            width: 22px;
            margin: 5px 5px 0 0;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #808285;
            border-radius: 50%;
            color: #808285;
            background-color: white;
        }
        .article_banner_title_section .a_b_left_content .a_b_left_content_bottom .a_b_left_content_bottom_socials .fa-facebook{
            color: white;
            background-color: #A1845C;
        }
        .article_banner_title_section .a_b_right_content .a_b_right_content_header{
            background-color: #131313;
            width: 100%;
            transform: translateY(-50px);
            padding: 40px;
        }
        .article_banner_title_section .a_b_right_content .a_b_right_content_header > h1{
            color: #A1845C;
            font-weight: bold;
            font-size: 60px;
        }

        .article-created-by{
            font-size: 20px;
            padding: 0 0 40px 40px;
        }
        .article-created-by > u{
            font-size: 28px;
            color: #A1845C;
            text-decoration-color: #A1845C;
            text-underline-offset: 4px;
        }

        /*Banner END */

        /* Article */
            .a_b_right_content_body{
                padding-top: 40px;
            }
            .a_b_right_content_body p {
                font-size: 18px;
                word-break:break-word;
                line-height: 1.2;
            }
            .a_b_right_content_body  p .start-of-paragraph {
                font-family: 'simoncini-garamond-std-roman', sans-serif;
                font-size: 180px;
                color:#A1845C;
                display: block;
                float: left;
                line-height: 1;
                transform:translateY(-37px);
                margin: 15px 15px -45px 0;
            }

            /* SLIDER */
            .slides::-webkit-scrollbar {
                width: 5px;
                height: 5px;
            }
            .slides::-webkit-scrollbar-thumb {
                background: #A1845C;
                margin-top: 5px;
                border-radius: 10px;
            }
            .slides::-webkit-scrollbar-track {
                background: transparent;
            }
            .horizontal-style > div > img {
                height: 615px;
            }
            .horizontal-style > div > span {
                display: block;
                width: 100%;
                border-top: 1px solid #A1845C;
            }
            .swiper-slide > div > span {
                border-top: 1px solid #A1845C;
                padding-top: 0px;
                margin-top: 0px;
                width: 100%;
                font-size: 12px;
            }
            .paragraph-margin-after-horizontal-slides{
                margin-top: 670px;
            }
            .paragraph-margin-after-slides{
                margin-top: 15px;
            }
            /* SLIDER END */
        /*Article END */

        .swiper-vertical{
            width: 700px !important;
            /*transform: translateX(-60px);*/
        }
        .mySwiperVertical .swiper-slide{
            /*width: 650px !important;*/
            /*transform: translateX(-60px);*/
        }
    .mySwiperHorizontal .swiper-wrapper .swiper-slide > div > span{
        width: 100%; /*23%*/
        /*float: left;*/
        font-size: 11px;
        border-top: 1px solid #A1845C;
    }

    @media (max-width: 767px) {
        .article_banner_title_section .a_b_left_content .a_b_left_content_bottom {
            margin-top: 0;
        }
        .article_banner_title_section .a_b_right_content .a_b_right_content_header {
            transform: inherit;
            padding: 5px;
            margin-top: 30px;
        }
        .article-created-by {
            padding: 0;
            margin-top: 15px;
        }
        .article_banner_title_section .a_b_right_content .a_b_right_content_header > h1 {
            font-size: 24px;
        }
        .a_b_right_content_body > p {
            font-size: 15px;
            word-break: break-all;
        }
        .a_b_right_content_body p .start-of-paragraph {
            font-size: 80px;
        }
        .mySwiperHorizontal .swiper-wrapper .swiper-slide > div > span,
        .horizontal-style > div > span {
            width: auto;
        }
        .horizontal-style > div > img {
            width: 100%;
            height: auto;
        }
    }
</style>

    <div class="article-font-style">
        <div class="article_banner">
            <div class="article_banner_image">
                <img src="/images/article_banner.jpg" alt="Petro A Dhimitri">
                <div class="container article_banner_title_section">
                    <div class="row">
                        <div class="a_b_left_content col-12 col-md-6 col-lg-3">
                            <p>
                                <i>Fig.1  Boca e kartvizitës së Petro Dhimitrit, <br>
                                    rreth 1895, pllakë xhami</i>
                            </p>
                            <div class="a_b_left_content_bottom">
                                <u>E Enjte  20.10.2022</u> <br>
                                <div class="a_b_left_content_bottom_socials">
                                    <i class="fa fa-facebook"></i>
                                    <i class="fa fa-twitter"></i>
                                    <i class="fa fa-envelope"></i>
                                </div>
                            </div>
                        </div>
                        <div class="a_b_right_content col-12 col-md-6 col-lg-9">
                            <div class="a_b_right_content_header">
                                <h1>Petro Dhimitri, <br>
                                    <i>“Dritëshkronjësi”</i>  i harruar </h1>
                            </div>
                            <div class="article-created-by">nga <u>Rubens Shima</u></div>
                            <div class="a_b_right_content_body">
                                <div class="col-xl-7">
                                    <p>
                                        <span class="start-of-paragraph">P</span>I-etro Dhimitri, evame ukwaziwa ngesiteketiso sokuhweba ngokuthi i-Petro Fotografi, yazalelwa edolobheni laseKorça, idolobha elikhulu eliseningizimu-mpumalanga ye-Albania, ngaleso sikhathi inhloko-dolobha yesigaba sokuphatha soMbuso Wase-Ottoman. Alukho ulwazi ngomndeni wakhe, kuthiwa esemncane, njengabanye abantu bakithi abaningi, ikakhulukazi abavela emiphakathini yamaKristu eningizimu-mpumalanga, wakhetha ukuthuthela e-Istanbul.
                                        Izakhamuzi zale ndawo zashaywa namaKurbet kusukela ekuqaleni futhi ngokuvamile zathuthela ngenxa yezizathu zezomnotho eRomania, Bulgaria, Greece, Egypt noma uMbuso Wase-Ottoman.
                                        Kunzima ukuthola ngokuqondile izizathu zokukhetha le ndawo nguPetro Dhimitri, futhi isinqumo sakhe sokubuyela ezweni lakubo, ekhathazwa ukuqala kwenhlangano kazwelonke kanye nomqondo wokuzimela owawusuqalile ukuvela, uye wahlala ngokulinganayo. akucaci.
                                        Kuthiwa ukhiphe ubuciko bokuthwebula izithombe e-Istanbul ngaphansi kwezimo ezingaziwa futhi cishe zizohlala zinjalo kithi kuze kube sekupheleni. Njengengcweti enekhono lokuthwebula izithombe e-Istanbul noma kwenye indawo, uPetro Dhimitri osemusha wabonakala njengomthwebuli wezithombe eKazan e Korça, ekupheleni kwekhulu le-19 (cishe ngo-1897 - 1898), lapho izithombe zokuqala ezaziwa kuze kube namuhla zivela khona. Ingilazi endala engalungile etholwe ngenhlanhla isinika ucezu olubalulekile lolwazi: uhlangothi oluthwebuliwe lwekhadi lakhe lebhizinisi, lapho ngaphandle kwesithombe esine-Ottoman fez ekhanda lakhe futhi ephawulwe ngama-moles oMbuso, inyanga ecwebile enenkanyezi. , ifundeka ngesi-Albania esidala esibhalwe ngezinhlamvu zesiGreki 'εtro A. Timitri Driteσkroηes Korçe' [fig.1].
                                        Kungenzeka ukuthi leli khadi lebhizinisi elinobuso bakhe lizungezwe ama-gilts kanye nophawu loMbuso phezulu limemezele izindaba zokuthi i-Kurbetci Petro Dhimitri ibuyele ejele futhi ilethe naye (njengesifo nje) ubuciko obuyisimangaliso. umbhali okhanyayo, umthelela owawuzosabalala yonke indawo, uguqule impilo yesifundazwe unomphela. Ngakho-ke, ekuqaleni kwekhulu lama-XXI, uPetro Fotografi, i-llagap eyayizomgcina impilo yakhe yonke, yenzeka enhloko-dolobha yaseNingizimu-mpumalanga, lapho abantu abahlukahlukene, kodwa ikakhulukazi abenkolo yamaSulumane, bebanjwe umuzwa wokwesaba nokusola ukuthintana nokuthwebula izithombe, kancane kancane base beqale ukujwayelana nakho futhi bakwamukele.
                                        Emashumini eminyaka ngaphambili, umdwebi ojikelezayo u-Edward Lear encwadini yakhe ethi 'Journals of a Landscape Painter in Albania' ("Diary of a Landscape Painter in Albania", 1851) echazwe ngamanothi ajabulisayo futhi amahle ngokuvakashela kwakhe kuleli zwe lamaSulumane, lapho umdwebo wabonakala khona. njengesenzo esihlambalazayo, kanye nemiphumela yokuvezwa kobuciko obala emphakathini ngokuvamile yayihambisana nokujikijelwa ngamatshe, ukushaya ikhwela ngeminwe emlonyeni 'njengoba benza abafundisi benyama eNgilandi' noma ngamakhorasi athi 'bhala uSathane!'
                                        Kwakudlulile kancane kusukela ngalesi sikhathi lapho "udeveli" ebuyela kulezi zindawo futhi, kodwa kulokhu wayengeke abhale ngepensela, kodwa ngokukhanya.
                                        Ngalesi sikhathi, abanye abalingiswa abavelele bezithombe zakuqala zaseNingizimu-mpumalanga babesanda kuqala ukuzungeza enhloko-dolobha yaseKorça; U-Papa Jani Zengo e-Dardë kanye no-Kristo Sulidhi e-Korçë kanye nokuqhubeka eminyakeni embalwa kamuva no-Thimi Zografi kanye ne-Greek Athanasio Nikolakopolus, bonke abanethonya elihlukile lobuciko njengoba ulwazi lwabo lokufuduka lokufunda umsebenzi wezandla ngaphandle kwase-Albania nabo behlukene.
                                        Kule minyaka yezinxushunxushu, umqondo wokuzibusa ngaphansi koMbuso Wase-Ottoman wawuvuse ubuzwe base-Albania naphezu
                                    </p>
                                </div>

                                <!-- SLIDER #1 -- 2 photos --------------------------------------- -->
                                <!-- ------------------------------------------------------------- -->
                                <div class="swiper mySwiper mySwiperHorizontal width600 ms-0">
                                    <div class="swiper-wrapper swiper-horizontal">
                                        <div class="swiper-slide">
                                            <div id="slide-2">
                                                <img src="/images/para_1_image_1.jpg" alt="">
                                                <span>Fig.2  Muço Qulli me kostum kombëtar. 1912 (3 Maj 1912). Print në letër</span>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div id="slide-3">
                                                <img src="/images/para_1_image_2.jpg" alt="">
                                                <span>Fig.3  Muço Qulli me kostum kombëtar. 1912. Print në letër</span>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div id="slide-4">
                                                <img src="/images/para_1_image_3.jpg" alt="">
                                                <span>Fig.4  Paria e qytetit të Elbasanit viziton shkollën Normale. 1909. Print në letër</span>
                                            </div>
                                        </div>
                                    </div>

                                    <br /><br />
                                    <div class="swiper-pagination"></div>
                                </div>
                                <!-- END OF SLIDER #1 -- 2 photos -------------------------------- -->


                                <div class="col-xl-7">
                                    <p class="mt-3">
                                        kIzakhamuzi zale ndawo zashaywa namaKurbet kusukela ekuqaleni futhi ngokuvamile zathuthela ngenxa yezizathu zezomnotho eRomania, Bulgaria, Greece, Egypt noma uMbuso Wase-Ottoman.
                                        Kunzima ukuthola ngokuqondile izizathu zokukhetha le ndawo nguPetro Dhimitri, futhi isinqumo sakhe sokubuyela ezweni lakubo, ekhathazwa ukuqala kwenhlangano kazwelonke kanye nomqondo wokuzimela owawusuqalile ukuvela, uye wahlala ngokulinganayo. akucaci.
                                        Kuthiwa ukhiphe ubuciko bokuthwebula izithombe e-Istanbul ngaphansi kwezimo ezingaziwa futhi cishe zizohlala zinjalo kithi kuze kube sekupheleni. Njengengcweti enekhono lokuthwebula izithombe e-Istanbul noma kwenye indawo, uPetro Dhimitri osemusha wabonakala njengomthwebuli wezithombe eKazan e Korça, ekupheleni kwekhulu le-19 (cishe ngo-1897 - 1898), lapho izithombe zokuqala ezaziwa kuze kube namuhla zivela khona. Ingilazi endala engalungile etholwe ngenhlanhla isinika ucezu olubalulekile lolwazi: uhlangothi oluthwebuliwe lwekhadi lakhe lebhizinisi, lapho ngaphandle kwesithombe esine-Ottoman fez ekhanda lakhe futhi ephawulwe ngama-moles oMbuso, inyanga ecwebile enenkanyezi. , ifundeka ngesi-Albania esidala esibhalwe ngezinhlamvu zesiGreki 'εtro A. Timitri Driteσkroηes Korçe' [fig.1].
                                        Kungenzeka ukuthi leli khadi lebhizinisi elinobuso bakhe lizungezwe ama-gilts kanye nophawu loMbuso phezulu limemezele izindaba zokuthi i-Kurbetci Petro Dhimitri ibuyele ejele futhi ilethe naye (njengesifo nje) ubuciko obuyisimangaliso. umbhali okhanyayo, umthelela owawuzosabalala yonke indawo, uguqule impilo yesifundazwe unomphela. Ngakho-ke, ekuqaleni kwekhulu lama-XXI, uPetro Fotografi, i-llagap eyayizomgcina impilo yakhe yonke, yenzeka enhloko-dolobha yaseNingizimu-mpumalanga, lapho abantu abahlukahlukene, kodwa ikakhulukazi abenkolo yamaSulumane, bebanjwe umuzwa wokwesaba nokusola ukuthintana nokuthwebula izithombe, kancane kancane base beqale ukujwayelana nakho futhi bakwamukele.
                                        Emashumini eminyaka ngaphambili, umdwebi ojikelezayo u-Edward Lear encwadini yakhe ethi 'Journals of a Landscape Painter in Albania' ("Diary of a Landscape Painter in Albania", 1851) echazwe ngamanothi ajabulisayo futhi amahle ngokuvakashela kwakhe kuleli zwe lamaSulumane, lapho umdwebo wabonakala khona. njengesenzo esihlambalazayo, kanye nemiphumela yokuvezwa kobuciko obala emphakathini ngokuvamile yayihambisana nokujikijelwa ngamatshe, ukushaya ikhwela ngeminwe emlonyeni 'njengoba benza abafundisi benyama eNgilandi' noma ngamakhorasi athi 'bhala uSathane!'
                                        Kwakudlulile kancane kusukela ngalesi sikhathi lapho "udeveli" ebuyela kulezi zindawo futhi, kodwa kulokhu wayengeke abhale
                                    </p>
                                </div>


                                <!-- SLIDER #2 -- 6 photos --------------------------------------- -->
                                <!-- ------------------------------------------------------------- -->
                                <div class="swiper mySwiper mySwiperVertical width600 ms-0">
                                    <div class="swiper-wrapper swiper-vertical">
                                        <div class="swiper-slide">
                                            <div id="slide-5">
                                                <img src="/images/para_2_image_1.jpg" alt="">
                                                <span>Fig.5  Ushtar i Armatës së Orientit me bashkëshorten e tij vendase, rreth 1917-1919, pllakë xhami</span>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div id="slide-6">
                                                <img src="/images/para_2_image_2.jpg" alt="">
                                                <span>Fig.6  Ushtar indokinez i Armatës Franceze të Orientit në një kolazh erotik, rreth 1917-1918, pllakë xhami</span>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div id="slide-7">
                                                <img src="/images/para_2_image_3.jpg" alt="">
                                                <span>Fig.7  Lef Nosi me kostum kombëtar, 1908, print në letër</span>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div id="slide-8">
                                                <img src="/images/para_2_image_4.jpg" alt="">
                                                <span>Fig.8  Lef Nosi në pozë me veshje malësori, rreth 1908, pllakë xhami</span>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div id="slide-9">
                                                <img src="/images/para_2_image_5.jpg" alt="">
                                                <span>Fig.9  Dervish Bej Biçaku (1874-1952), latifondist dhe patriot i shquar, rreth 1908-1909, print në letër</span>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div id="slide-10">
                                                <img src="/images/para_2_image_6.jpg" alt="">
                                                <span>Fig.10  Muço Qulli me kostum kombëtar, 3 Maj 1912, print në letër</span>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div id="slide-11">
                                                <img src="/images/para_2_image_7.jpg" alt="">
                                                <span>Fig.11  Fotografi Petro Dhimitri me veshje tradicionale, 1908, Print në letër</span>
                                            </div>
                                        </div>
                                    </div>

                                    <br /><br />
                                    <div class="swiper-pagination"></div>
                                </div>
                                <!-- END OF SLIDER #2 -- 6 photos -------------------------------- -->

                                <div class="col-xl-7">
                                    <p {{--class="paragraph-margin-after-slides"--}}>
                                        ngepensela, kodwa ngokukhanya.
                                        Ngalesi sikhathi, abanye abalingiswa abavelele bezithombe zakuqala zaseNingizimu-mpumalanga babesanda kuqala ukuzungeza enhloko-dolobha yaseKorça; U-Papa Jani Zengo e-Dardë kanye no-Kristo Sulidhi e-Korçë kanye nokuqhubeka eminyakeni embalwa kamuva no-Thimi Zografi kanye ne-Greek Athanasio Nikolakopolus, bonke abanethonya elihlukile lobuciko njengoba ulwazi lwabo
                                    </p>
                                </div>

                                <!-- SLIDER #3 -- 2 photos --------------------------------------- -->
                                <!-- ------------------------------------------------------------- -->
                                <div class="swiper mySwiper mySwiperHorizontal width600 ms-0">
                                    <div class="swiper-wrapper swiper-horizontal">
                                        <div class="swiper-slide">
                                            <div id="slide-1">
                                                <img src="/images/para_3_image_1.jpg" alt="">
                                                <span>Fig.12  Tushi i Vajës, çingie elbasanase e kohës, 1910, print në letër</span>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div id="slide-2">
                                                <img src="/images/para_3_image_2.jpg" alt="">
                                                <span>Fig.13  Ismail Qemali përshëndet në njëvjetorin e Pavarësisë, Vlorë. 1913, print në letër</span>
                                            </div>
                                        </div>
                                    </div>

                                    <br /><br />
                                    <div class="swiper-pagination"></div>
                                </div>
                                <!-- END OF SLIDER #3 -- 2 photos -------------------------------- -->

                                <div class="col-xl-7">
                                    <p {{--class="paragraph-margin-after-horizontal-slides"--}}>
                                        lokufuduka lokufunda umsebenzi wezandla ngaphandle kwase-Albania nabo behlukene.
                                        Kule minyaka yezinxushunxushu, umqondo wokuzibusa ngaphansi koMbuso Wase-Ottoman wawuvuse ubuzwe base-Albania naphezu kwemvelo exubile ngokombono wenkolo, - Muslim, Orthodox, Catholic, nanjengoba uNathalie Clayer ebhala encwadini yakhe ethi 'In the beginnings of Ubuzwe base-Albania', "uyoba khona izithiyo eziningi okufanele azinqobe kunobuzwe baseBalkan; hhayi kuphela ukuhlukana kwezenkolo, kodwa nokuphikiswa kweziphathimandla zase-Ottoman namazwe angomakhelwane, kanye nokuntuleka kombuso owenziwe ... ".
                                        UPetro Dhimitri wayengumsekeli wesizathu sase-Albania sokuzimela, izithombe zakhe ngalesi sikhathi zinikezela indawo ekhethekile kulezi zenzakalo; isithombe sedrama ethi 'Besa' kaSami Frashëri, Korçë (1908), isithombe seNkongolo kaIzakhamuzi zale ndawo zashaywa namaKurbet kusukela ekuqaleni futhi ngokuvamile zathuthela ngenxa yezizathu zezomnotho eRomania, Bulgaria, Greece, Egypt noma uMbuso Wase-Ottoman.
                                        Kunzima ukuthola ngokuqondile izizathu zokukhetha le ndawo nguPetro Dhimitri, futhi isinqumo sakhe sokubuyela ezweni lakubo, ekhathazwa ukuqala kwenhlangano kazwelonke kanye nomqondo wokuzimela owawusuqalile ukuvela, uye wahlala ngokulinganayo. akucaci.
                                        Kuthiwa ukhiphe ubuciko bokuthwebula izithombe e-Istanbul
                                    </p>
                                </div>


                                <!-- SLIDER #4 -- 4 photos --------------------------------------- -->
                                <!-- ------------------------------------------------------------- -->
                                <div class="swiper mySwiper mySwiperVertical width600 ms-0">
                                    <div class="swiper-wrapper swiper-vertical">
                                        <div class="swiper-slide">
                                            <div id="slide-1">
                                                <img src="/images/para_4_image_1.jpg" alt="">
                                                <span>Fig.14  Rojet Shqipëtare në pallatin e Princ Vidit, Durrës, 1914, pllakë xhami</span>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div id="slide-2">
                                                <img src="/images/para_4_image_2.jpg" alt="">
                                                <span>Fig.15  Petro Dhimitri, Vlorë. 1916, print në letër</span>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div id="slide-3">
                                                <img src="/images/para_4_image_3.jpg" alt="">
                                                <span>Fig.16  Vendas në pozë me oficerë amerikanë, rreth 1918, pllakë xhami</span>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div id="slide-4">
                                                <img src="/images/para_4_image_4.jpg" alt="">
                                                <span>Fig.17  Oficer i plagosur francez, Korçë, rreth 1917-1918, pllakë xhami</span>
                                            </div>
                                        </div>
                                    </div>

                                    <br /><br />
                                    <div class="swiper-pagination"></div>
                                </div>
                                <!-- END OF SLIDER #4 -- 4 photos -------------------------------- -->

                                <div class="col-xl-7">
                                    <p {{--class="paragraph-margin-after-slides"--}}>
                                        ngaphansi kwezimo ezingaziwa futhi cishe zizohlala zinjalo kithi kuze kube sekupheleni. Njengengcweti enekhono lokuthwebula izithombe e-Istanbul noma kwenye indawo, uPetro Dhimitri osemusha wabonakala njengomthwebuli wezithombe eKazan e Korça, ekupheleni kwekhulu le-19 (cishe ngo-1897 - 1898), lapho izithombe zokuqala ezaziwa kuze kube namuhla zivela khona. Ingilazi endala engalungile etholwe ngenhlanhla isinika ucezu olubalulekile lolwazi: uhlangothi oluthwebuliwe lwekhadi lakhe lebhizinisi, lapho ngaphandle kwesithombe esine-Ottoman fez ekhanda lakhe futhi ephawulwe ngama-moles oMbuso, inyanga ecwebile enenkanyezi. , ifundeka ngesi-Albania esidala esibhalwe ngezinhlamvu zesiGreki 'εtro A. Timitri Driteσkroηes Korçe' [fig.1].
                                        Kungenzeka ukuthi leli khadi lebhizinisi elinobuso bakhe lizungezwe ama-gilts kanye nophawu loMbuso phezulu limemezele izindaba zokuthi i-Kurbetci Petro Dhimitri ibuyele ejele futhi ilethe naye
                                    </p>
                                </div>



                                <!-- SLIDER #5 -- 3 photos --------------------------------------- -->
                                <!-- ------------------------------------------------------------- -->
                                <div class="swiper mySwiper mySwiperVertical width600 ms-0">
                                    <div class="swiper-wrapper swiper-vertical">
                                        <div class="swiper-slide">
                                            <div id="slide-18">
                                                <img src="/images/para_5_image_1.jpg" alt="">
                                                <span>Fig.18  Reverendi Phineas Barbour Kennedy me të shoqen Violet R.Bond (ulur), rreth 1920, pllakë xhami</span>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div id="slide-19">
                                                <img src="/images/para_5_image_3.jpg" alt="">
                                                <span>Fig.19  Portreti i Papa Aleksit, Elbasan, 1929, print në letër</span>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div id="slide-20">
                                                <img src="/images/para_5_image_2.jpg" alt="">
                                                <span>Fig.20  Inagurimi i bibliotekës "Thoma Turtulli", Korçë. 1930, print në letër</span>
                                            </div>
                                        </div>
                                    </div>

                                    <br /><br />
                                    <div class="swiper-pagination"></div>
                                </div>
                                <!-- END OF SLIDER #5 -- 3 photos -------------------------------- -->


                                <div class="col-xl-7">
                                    <p {{--class="paragraph-margin-after-slides"--}}>
                                        (njengesifo nje) ubuciko obuyisimangaliso. umbhali okhanyayo, umthelela owawuzosabalala yonke indawo, uguqule impilo yesifundazwe unomphela. Ngakho-ke, ekuqaleni kwekhulu lama-XXI, uPetro Fotografi, i-llagap eyayizomgcina impilo yakhe yonke, yenzeka enhloko-dolobha yaseNingizimu-mpumalanga, lapho abantu abahlukahlukene, kodwa ikakhulukazi abenkolo yamaSulumane, bebanjwe umuzwa wokwesaba nokusola ukuthintana nokuthwebula izithombe, kancane kancane base beqale ukujwayelana nakho futhi bakwamukele.
                                        Emashumini eminyaka ngaphambili, umdwebi ojikelezayo u-Edward Lear encwadini yakhe ethi 'Journals of a Landscape Painter in Albania' ("Diary of a Landscape Painter in Albania", 1851) echazwe ngamanothi ajabulisayo futhi amahle ngokuvakashela kwakhe kuleli zwe lamaSulumane, lapho umdwebo wabonakala khona. njengesenzo esihlambalazayo, kanye nemiphumela yokuvezwa kobuciko obala emphakathini ngokuvamile yayihambisana nokujikijelwa ngamatshe, ukushaya ikhwela ngeminwe emlonyeni 'njengoba benza abafundisi benyama eNgilandi' noma ngamakhorasi athi 'bhala uSathane!'
                                        Kwakudlulile kancane kusukela ngalesi sikhathi lapho "udeveli" ebuyela kulezi zindawo futhi, kodwa kulokhu wayengeke abhale ngepensela, kodwa ngokukhanya.
                                        Ngalesi sikhathi, abanye abalingiswa abavelele bezithombe zakuqala zaseNingizimu-mpumalanga babesanda kuqala ukuzungeza enhloko-dolobha yaseKorça; U-Papa Jani Zengo e-Dardë kanye no-Kristo Sulidhi e-Korçë kanye nokuqhubeka eminyakeni embalwa kamuva no-Thimi Zografi kanye ne-Greek Athanasio Nikolakopolus, bonke abanethonya elihlukile lobuciko njengoba ulwazi lwabo lokufuduka lokufunda umsebenzi wezandla ngaphandle kwase-Albania nabo behlukene.
                                        Kule minyaka yezinxushunxushu, umqondo wokuzibusa ngaphansi koMbuso Wase-Ottoman wawuvuse ubuzwe base-Albania naphezu kwemvelo exubile ngokombono wenkolo, - Muslim, Orthodox, Catholic, nanjengoba uNathalie Clayer ebhala encwadini yakhe ethi 'In the
                                    </p>
                                </div>


                                <!-- SLIDER #6 -- 3 photos --------------------------------------- -->
                                <!-- ------------------------------------------------------------- -->
                                <div class="swiper mySwiper mySwiperVertical width600 ms-0">
                                    <div class="swiper-wrapper swiper-vertical">
                                        <div class="swiper-slide">
                                            <div id="slide-21">
                                                <img src="/images/para_6_image_1.jpg" alt="">
                                                <span>Fig.21  Bijat e Petro Fotografit, Thea dhe Ollga, me veshje dardhare, rreth 1920-1925, pllakë xhami</span>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div id="slide-22">
                                                <img src="/images/para_6_image_2.jpg" alt="">
                                                <span>Fig.22  Thea, e bija e fotografit, rreth 1920-1925, pllakë xhami</span>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div id="slide-23">
                                                <img src="/images/para_6_image_3.jpg" alt="">
                                                <span>Fig.23  Thea, e bija e fotografit, rreth 1920-1925, pllakë xhami</span>
                                            </div>
                                        </div>
                                    </div>

                                    <br /><br />
                                    <div class="swiper-pagination"></div>
                                </div>
                                <!-- END OF SLIDER #6 -- 3 photos -------------------------------- -->



                                <div class="col-xl-7">
                                    <p {{--class="paragraph-margin-after-slides"--}}>
                                        beginnings of Ubuzwe base-Albania', "uyoba khona izithiyo eziningi okufanele azinqobe kunobuzwe baseBalkan; hhayi kuphela ukuhlukana kwezenkolo, kodwa nokuphikiswa kweziphathimandla zase-Ottoman namazwe angomakhelwane, kanye nokuntuleka kombuso owenziwe ... ".
                                        Izakhamuzi zale ndawo zashaywa namaKurbet kusukela ekuqaleni futhi
                                    </p>
                                </div>


                                <!-- SLIDER #7 -- 1 photos --------------------------------------- -->
                                <!-- ------------------------------------------------------------- -->
                                <div class="swiper mySwiper mySwiperHorizontal width600 ms-0">
                                    <div class="swiper-wrapper swiper-horizontal">
                                        <div class="swiper-slide">
                                            <div id="slide-24">
                                                <img src="/images/para_7_image_1.jpg" alt="">
                                                <span>Fig.24  Kompozim me Thean, Korçë. Rreth 1920-1925, pllakë xhamii</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END OF SLIDER #7 -- 1 photos -------------------------------- -->



                                <div class="col-xl-7">
                                    <p class="paragraph-margin-after-slides">
                                        ngokuvamile zathuthela ngenxa yezizathu zezomnotho eRomania, Bulgaria, Greece, Egypt noma uMbuso Wase-Ottoman.
                                        Kunzima ukuthola ngokuqondile izizathu zokukhetha le ndawo nguPetro Dhimitri, futhi isinqumo sakhe sokubuyela ezweni lakubo, ekhathazwa ukuqala kwenhlangano kazwelonke kanye nomqondo wokuzimela owawusuqalile ukuvela, uye wahlala ngokulinganayo. akucaci.
                                        Kuthiwa ukhiphe ubuciko bokuthwebula izithombe e-Istanbul ngaphansi kwezimo ezingaziwa futhi cishe zizohlala zinjalo kithi kuze kube sekupheleni. Njengengcweti enekhono lokuthwebula izithombe e-Istanbul noma kwenye indawo, uPetro Dhimitri osemusha wabonakala njengomthwebuli wezithombe eKazan e Korça, ekupheleni kwekhulu le-19 (cishe ngo-1897 - 1898), lapho izithombe zokuqala ezaziwa kuze kube namuhla zivela khona. Ingilazi endala engalungile etholwe ngenhlanhla isinika ucezu olubalulekile lolwazi: uhlangothi oluthwebuliwe lwekhadi lakhe lebhizinisi, lapho ngaphandle kwesithombe esine-Ottoman fez ekhanda lakhe futhi ephawulwe ngama-moles oMbuso, inyanga ecwebile enenkanyezi. , ifundeka ngesi-Albania esidala esibhalwe ngezinhlamvu zesiGreki 'εtro A. Timitri Driteσkroηes Korçe' [fig.1].
                                        Kungenzeka ukuthi leli khadi lebhizinisi elinobuso bakhe lizungezwe ama-gilts kanye nophawu loMbuso phezulu limemezele izindaba zokuthi i-Kurbetci Petro Dhimitri ibuyele ejele futhi ilethe naye (njengesifo nje) ubuciko obuyisimangaliso. umbhali okhanyayo, umthelela owawuzosabalala yonke indawo, uguqule impilo yesifundazwe unomphela. Ngakho-ke, ekuqaleni kwekhulu lama-XXI, uPetro Fotografi, i-llagap eyayizomgcina impilo yakhe yonke, yenzeka enhloko-dolobha yaseNingizimu-mpumalanga, lapho abantu abahlukahlukene, kodwa ikakhulukazi abenkolo yamaSulumane, bebanjwe umuzwa wokwesaba nokusola ukuthintana nokuthwebula izithombe, kancane kancane base beqale ukujwayelana nakho futhi bakwamukele.
                                        Emashumini eminyaka ngaphambili, umdwebi ojikelezayo u-Edward Lear encwadini yakhe ethi 'Journals of a Landscape Painter in Albania' ("Diary of a Landscape Painter in Albania", 1851) echazwe ngamanothi ajabulisayo futhi amahle ngokuvakashela kwakhe kuleli zwe lamaSulumane, lapho umdwebo wabonakala khona. njengesenzo esihlambalazayo, kanye nemiphumela yokuvezwa kobuciko obala emphakathini ngokuvamile
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        let swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 50,
            slidesPerGroup: 1,
            autoplay: {
                delay: 7000,
            },
            loop: true,
            // loopFillGroupWithBlank: false,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
@endsection
