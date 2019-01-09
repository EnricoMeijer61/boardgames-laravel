@extends('layout.master')

@section('content')
    <div class="post-view jumbotron">
        <div class="post-holder post-holder-392 post-header clearfix post-content post-description clearfix">
            <div class="post-text-hld">
                    <div class="page-title-wrapper">
                        <h1 class="page-title"
                        >
                            <span class="base" data-ui-id="page-title-wrapper" >Algemene voorwaarden / Leveringsvoorwaarden</span>    </h1>
                    </div>
                    <div class="page messages"><div data-placeholder="messages"></div>
                        <div data-bind="scope: 'messages'">
                            <!-- ko if: cookieMessages && cookieMessages.length > 0 -->
                            <div role="alert" data-bind="foreach: { data: cookieMessages, as: 'message' }" class="messages">
                                <div data-bind="attr: {
            class: 'message-' + message.type + ' ' + message.type + ' message',
            'data-ui-id': 'message-' + message.type
        }">
                                    <div data-bind="html: message.text"></div>
                                </div>
                            </div>
                            <!-- /ko -->
                            <!-- ko if: messages().messages && messages().messages.length > 0 -->
                            <div role="alert" data-bind="foreach: { data: messages().messages, as: 'message' }" class="messages">
                                <div data-bind="attr: {
            class: 'message-' + message.type + ' ' + message.type + ' message',
            'data-ui-id': 'message-' + message.type
        }">
                                    <div data-bind="html: message.text"></div>
                                </div>
                            </div>
                            <!-- /ko -->
                        </div>
                        <script type="text/x-magento-init">
    {
        "*": {
            "Magento_Ui/js/core/app": {
                "components": {
                        "messages": {
                            "component": "Magento_Theme/js/view/messages"
                        }
                    }
                }
            }
    }
</script>
                    </div><div class="columns"><div class="column main"><input name="form_key" type="hidden" value="bmgwaOiTEwt4R2al" /><div id="authenticationPopup" data-bind="scope:'authenticationPopup'" style="display: none;">
                                <script>
                                    window.authenticationPopup = {"autocomplete":"off","customerRegisterUrl":"https:\/\/www.999games.nl\/customer\/account\/create\/","customerForgotPasswordUrl":"https:\/\/www.999games.nl\/customer\/account\/forgotpassword\/","baseUrl":"https:\/\/www.999games.nl\/"};
                                </script>
                                <!-- ko template: getTemplate() --><!-- /ko -->
                                <script type="text/x-magento-init">
        {
            "#authenticationPopup": {
                "Magento_Ui/js/core/app": {"components":{"authenticationPopup":{"component":"Magento_Customer\/js\/view\/authentication-popup","children":{"messages":{"component":"Magento_Ui\/js\/view\/messages","displayArea":"messages"},"captcha":{"component":"Magento_Captcha\/js\/view\/checkout\/loginCaptcha","displayArea":"additional-login-form-fields","formId":"user_login","configSource":"checkout"},"amazon-button":{"component":"Amazon_Login\/js\/view\/login-button-wrapper","sortOrder":"0","displayArea":"additional-login-form-fields","config":{"tooltip":"Securely login into our website using your existing Amazon details."}}}}}}            },
            "*": {
                "Magento_Ui/js/block-loader": "https\u003A\u002F\u002Fwww.999games.nl\u002Fstatic\u002Fversion1544523863\u002Ffrontend\u002FGames999\u002Fmkpl\u002Fnl_NL\u002Fimages\u002Floader\u002D1.gif"
            }
        }
    </script>
                            </div>
                            <script type="text/x-magento-init">
{"*":{"Magento_Customer\/js\/section-config":{"sections":{"stores\/store\/switch":"*","directory\/currency\/switch":"*","*":["messages"],"customer\/account\/logout":["recently_viewed_product","recently_compared_product"],"customer\/account\/loginpost":"*","customer\/account\/createpost":"*","customer\/account\/editpost":"*","customer\/ajax\/login":["checkout-data","cart"],"catalog\/product_compare\/add":["compare-products"],"catalog\/product_compare\/remove":["compare-products"],"catalog\/product_compare\/clear":["compare-products"],"sales\/guest\/reorder":["cart"],"sales\/order\/reorder":["cart"],"review\/product\/post":["review"],"checkout\/cart\/add":["cart","gtm"],"checkout\/cart\/delete":["cart","gtm"],"checkout\/cart\/updatepost":["cart"],"checkout\/cart\/updateitemoptions":["cart"],"checkout\/cart\/couponpost":["cart"],"checkout\/cart\/estimatepost":["cart"],"checkout\/cart\/estimateupdatepost":["cart"],"checkout\/onepage\/saveorder":["cart","checkout-data","last-ordered-items","checkout-fields"],"checkout\/sidebar\/removeitem":["cart","gtm"],"checkout\/sidebar\/updateitemqty":["cart"],"rest\/*\/v1\/carts\/*\/payment-information":["cart","checkout-data","last-ordered-items","instant-purchase","gtm"],"rest\/*\/v1\/guest-carts\/*\/payment-information":["cart","checkout-data","gtm"],"rest\/*\/v1\/guest-carts\/*\/selected-payment-method":["cart","checkout-data"],"rest\/*\/v1\/carts\/*\/selected-payment-method":["cart","checkout-data","instant-purchase"],"paypal\/express\/placeorder":["cart","checkout-data"],"paypal\/payflowexpress\/placeorder":["cart","checkout-data"],"orderlist\/cart\/additems":["cart"],"authorizenet\/directpost_payment\/place":["cart","checkout-data"],"braintree\/paypal\/placeorder":["cart","checkout-data"],"customer\/address\/*":["instant-purchase"],"customer\/account\/*":["instant-purchase"],"vault\/cards\/deleteaction":["instant-purchase"],"multishipping\/checkout\/overviewpost":["cart"],"wishlist\/index\/add":["wishlist"],"wishlist\/index\/remove":["wishlist"],"wishlist\/index\/updateitemoptions":["wishlist"],"wishlist\/index\/update":["wishlist"],"wishlist\/index\/cart":["wishlist","cart"],"wishlist\/index\/fromcart":["wishlist","cart"],"wishlist\/index\/allcart":["wishlist","cart"],"wishlist\/shared\/allcart":["wishlist","cart"],"wishlist\/shared\/cart":["cart"],"amgiftcard\/cart\/apply":["cart"],"amgiftcard\/cart\/remove":["cart"],"rest\/*\/v1\/guest-carts\/*\/collection-point\/select":["collection-point-result"],"rest\/*\/v1\/carts\/mine\/collection-point\/select":["collection-point-result"],"checkout\/cart\/configure":["gtm"],"rest\/*\/v1\/guest-carts\/*\/shipping-information":["gtm"],"rest\/*\/v1\/carts\/*\/shipping-information":["gtm"]},"clientSideSections":["checkout-data","cart-data"],"baseUrls":["https:\/\/www.999games.nl\/"]}}}</script>
                            <script type="text/x-magento-init">
{"*":{"Magento_Customer\/js\/customer-data":{"sectionLoadUrl":"https:\/\/www.999games.nl\/customer\/section\/load\/","expirableSectionLifetime":60,"expirableSectionNames":["cart"],"cookieLifeTime":"36000","updateSessionUrl":"https:\/\/www.999games.nl\/customer\/account\/updateSession\/"}}}</script>
                            <script type="text/x-magento-init">
{"*":{"Magento_Customer\/js\/invalidation-processor":{"invalidationRules":{"website-rule":{"Magento_Customer\/js\/invalidation-rules\/website-rule":{"scopeConfig":{"websiteId":1}}}}}}}</script>

                            <script type="text/x-magento-init">
    {
        "body": {
            "pageCache": {"url":"https:\/\/www.999games.nl\/page_cache\/block\/render\/page_id\/62\/","handles":["default","cms_page_view","cms_page_view_id_algemene-voorwaarden"],"originalRequest":{"route":"cms","controller":"page","action":"view","uri":"\/algemene-voorwaarden"},"versionCookieName":"private_content_version"}        }
    }
</script>
                            <div id="monkey_campaign" style="display:none;" data-mage-init='{"campaigncatcher":{}}'>
                            </div>
                            <script>
                                require([
                                    "jquery",
                                    "jquery/ui"
                                ], function($){

//<![CDATA[
                                    $.extend(true, $, {
                                        calendarConfig: {
                                            dayNames: ["zondag","maandag","dinsdag","woensdag","donderdag","vrijdag","zaterdag"],
                                            dayNamesMin: ["zo","ma","di","wo","do","vr","za"],
                                            monthNames: ["januari","februari","maart","april","mei","juni","juli","augustus","september","oktober","november","december"],
                                            monthNamesShort: ["jan.","feb.","mrt.","apr.","mei","jun.","jul.","aug.","sep.","okt.","nov.","dec."],
                                            infoTitle: "Over de kalender",
                                            firstDay: 0,
                                            closeText: "Sluiten",
                                            currentText: "Naar vandaag",
                                            prevText: "Vorige",
                                            nextText: "Volgende",
                                            weekHeader: "WK",
                                            timeText: "Tijd",
                                            hourText: "Uur",
                                            minuteText: "Minuut",
                                            dateFormat: $.datepicker.RFC_2822,
                                            showOn: "button",
                                            showAnim: "",
                                            changeMonth: true,
                                            changeYear: true,
                                            buttonImageOnly: null,
                                            buttonImage: null,
                                            showButtonPanel: true,
                                            showWeek: true,
                                            timeFormat: '',
                                            showTime: false,
                                            showHour: false,
                                            showMinute: false
                                        }
                                    });

                                    enUS = {"m":{"wide":["January","February","March","April","May","June","July","August","September","October","November","December"],"abbr":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"]}}; // en_US locale reference
//]]>

                                });
                            </script>
                            <h2>Leveringsvoorwaarden</h2>
                            <strong>
                                Artikel 1. Toepasselijkheid</strong>
                            <p>
                                <b>1.1</b> Op alle aanbiedingen, bestellingen en overeenkomsten van 999 Games B.V. (hierna: 999 Games) zijn bij uitsluiting van eventuele andere algemene voorwaarden deze Algemene Verkoopvoorwaarden (hierna: Voorwaarden) van toepassing.</p>
                            <p>
                                <b>1.2</b> Het accepteren van een aanbieding dan wel het doen van een bestelling houdt in dat u de toepasselijkheid van deze Voorwaarden aanvaardt.</p>
                            <p>
                                <b>1.3</b> Van het in deze Voorwaarden bepaalde kan slechts schriftelijk worden afgeweken, in welk geval de overige bepalingen onverkort van kracht blijven.</p>
                            <p>
                                <b>1.4</b> Alle rechten en aanspraken, zoals in deze Voorwaarden en in eventuele nadere overeenkomsten ten behoeve van 999 Games worden bedongen, worden evenzeer bedongen ten behoeve van door 999 Games ingeschakelde tussenpersonen en andere derden.</p>
                            <strong>
                                Artikel 2. Aanbiedingen/overeenkomsten</strong>
                            <p>
                                <b>2.1</b> Alle aanbiedingen van 999 Games zijn vrijblijvend en 999 Games behoudt zich uitdrukkelijk het recht voor om de prijzen te wijzigen, in het bijzonder wanneer dat op grond van (wettelijke) voorschriften noodzakelijk is. Zie ook artikel 3.6.</p>
                            <p>
                                <b>2.2</b> Een overeenkomst komt slechts tot stand na acceptatie van uw bestelling door 999 Games. 999 Games is gerechtigd bestellingen te weigeren dan wel bepaalde voorwaarden aan de levering te verbinden, tenzij uitdrukkelijk anders bepaald. Indien een bestelling niet wordt geaccepteerd, deelt 999 Games dit mee binnen tien (10) werkdagen na ontvangst van de bestelling.</p>
                            <strong>
                                Artikel 3. Prijzen en betalingen</strong>
                            <p>
                                <b>3.1</b> Tijdens het afrekenen ziet u de werkelijke verzendkosten, die prevaleren boven hetgeen hieronder vermeld:</p>
                            <p>
                                <em>Nederland, België en Duitsland</em> <br>
                                Verzending van orders naar Nederland, België en Duitsland zijn boven de €20 gratis.
                                Bij verzending van orders onder dit bedrag, bedraagt de verzendkosten €2,99. </p>

                            <p>
                                <em> Luxemburg</em> <br>
                                Verzending van orders naar Luxemburg zijn boven de €50 gratis.
                                Bij verzending van orders onder dit bedrag, bedraagt de verzendkosten €7,99.</p>

                            <p>
                                <em>Frankrijk</em> <br>
                                Verzending van orders naar Frankrijk zijn boven de €50 gratis.
                                Bij verzending van orders onder dit bedrag, bedraagt de verzendkosten €9,99.</p>

                            <p>
                                <b>3.2</b> Betaling kan alleen plaatsvinden door gebruik te maken van iDEAL, Sofort & Ban-contact. Mocht u toch onze rekeninggegevens nodig hebben: IBAN <strong>NL92RABO 0393672220</strong>, BIC <strong>RABONL2U</strong>.</p>
                            <p>
                                <strong>3.3</strong> 999 Games zorgt ervoor dat uw gegevens veilig worden opgeslagen door het gebruik van Secure Socket Layers (SSL), een geavanceerd beveiligingssysteem voor internet om uw gegevens te beschermen. Om de veiligheid van het bestelproces te garanderen, worden alle gegevens - inclusief naam, adres en creditcard - gecodeerd opgeslagen op een Secure Server. Zodoende zijn alle creditcard- en adresgegevens beveiligd in het 999 Games bestelsysteem. De meeste browsers ondersteunen SSL, waaronder Internet Explorer 2.1 of hoger, Netscape Navigator 2.0 of hoger, AOL 3.0 of hoger. Mocht u er niet zeker van zijn dat uw browser SSL ondersteunt, controleer de browser gegevens bij de Internet Service Provider (ISP).</p>
                            <p>
                                <strong>3.4</strong> In het -onwaarschijnlijke- geval van misbruik van uw creditcardnummer, vragen wij vriendelijk de aanwijzingen van uw eigen creditcardmaatschappij op te volgen. Wij verzoeken u 999 Games zo snel mogelijk op de hoogte te brengen door een e-mail te sturen aan <u><a href="mailto:klantenservice@999games.nl">klantenservice@999games.nl</a></u>. De meeste creditcardmaatschappijen dekken alle schade boven een bepaald bedrag ten gevolge van misbruik van uw creditcardnummer.</p>
                            <p>
                                <b>3.5</b> Indien u met enige betaling in gebreke bent, is 999 Games gerechtigd (de uitvoering van) de betreffende overeenkomst en daarmee samenhangende overeenkomsten op te schorten, dan wel te ontbinden.</p>
                            <p>
                                <b>3.6</b> Indien de prijzen voor de aangeboden producten en diensten stijgen in de periode tussen de bestelling en de uitvoering daarvan, bent u gerechtigd de bestelling te annuleren dan wel de overeenkomst te ontbinden binnen tien (10) dagen na mededeling van de prijsverhoging door 999 Games.</p>
                            <strong>
                                Artikel 4. Levering</strong>
                            <p>
                                <b>4.1</b> De door 999 Games opgegeven levertijden zijn slechts indicatief. Overschrijding van enige leveringstermijn geeft u geen recht op schadevergoeding en evenmin het recht uw bestelling te annuleren dan wel de overeenkomst te ontbinden, tenzij de overschrijding van de leveringstermijn zodanig is dat van u redelijkerwijs niet kan worden verlangd dat u de overeenkomst in stand laat. U bent in dat geval gerechtigd de bestelling te annuleren dan wel de overeenkomst te ontbinden voor zover dat noodzakelijk is.</p>
                            <p>
                                <b>4.2</b> De levering van de producten geschiedt op werkdagen op de plaats en het tijdstip waarop de producten gereed zijn voor verzending aan u. Hierbij geldt: op werkdagen vóór 15.00 uur besteld, de volgende werkdag bezorgd (alleen binnen Nederland). Voor buitenlandse leveringen streven wij naar levering binnen 48 uur. In het weekend en op feestdagen wordt in principe niet door onze transporteur bezorgd.</p>
                            <strong>
                                Artikel 5. Eigendomsvoorbehoud</strong>
                            <p>
                                <b>5.1</b> De eigendom van geleverde producten gaat pas over, indien u al hetgeen u op grond van enige overeenkomst aan 999 Games verschuldigd bent, heeft voldaan. Het risico ter zake van de producten gaat reeds op het moment van de aflevering op u over.</p>
                            <strong>
                                Artikel 6. Intellectuele en industriële eigendomsrechten</strong>
                            <p>
                                <b>6.1</b> U dient alle intellectuele en industriële eigendomsrechten welke rusten op de door 999 Games geleverde producten geheel en onvoorwaardelijk te respecteren.</p>
                            <p>
                                <b>6.2</b> 999 Games garandeert niet dat de aan u geleverde producten geen inbreuk maken op enig (ongeschreven) intellectueel en/of industrieel eigendomsrecht van derden.</p>
                            <strong>
                                Artikel 7. Reclames en aansprakelijkheid</strong>
                            <p>
                                <b>7.1</b> U heeft de verplichting om bij aflevering te onderzoeken of de producten aan de overeenkomst beantwoorden. Indien dit niet het geval is, dient u 999 Games daarvan zo spoedig mogelijk en in ieder geval binnen veertien (14) dagen na de aflevering, althans nadat constatering redelijkerwijze mogelijk was, schriftelijk en gemotiveerd kennis te geven.</p>
                            <p>
                                <b>7.2</b> Indien is aangetoond dat de producten niet aan de overeenkomst beantwoorden, heeft 999 Games de keuze de desbetreffende producten tegen retournering daarvan te vervangen door nieuwe producten dan wel de factuurwaarde daarvan te restitueren.</p>
                            <p>
                                <b>7.3</b> Indien u een product om welke reden dan ook niet wenst af te nemen, heeft u het recht het product binnen veertien (14) dagen na aflevering aan 999 Games te retourneren. Retourzendingen worden in dit geval slechts geaccepteerd indien de verpakking van het product onbeschadigd is en de plastic verzegeling op de verpakking niet is verbroken, waarbij tevens geldt dat de kosten voor retourzendingen voor uw rekening komen. U kunt het product retour sturen naar onderstaand adres:<br />
                                999 Games BV<br />
                                t.a.v. retour webshop<br />
                                Wormerweg 2<br />
                                1311 XB Almere<br />
                                <strong>Let op:</strong> Vermeld altijd uw ordernummer bij de retourzending.
                            </p>
                            <strong>
                                Artikel 8. Bestellingen/communicatie</strong>
                            <p>
                                <b>8.1</b> Voor misverstaan, verminkingen, vertragingen of niet behoorlijk overkomen van bestellingen en mededelingen ten gevolge van het gebruik van Internet of enig ander communicatiemiddel in het verkeer tussen u en 999 Games, dan wel tussen 999 Games en derden, voor zover betrekking hebbend op de relatie tussen u en 999 Games, is 999 Games niet aansprakelijk, tenzij en voor zover sprake mocht zijn van opzet of grove schuld van 999 Games.</p>
                            <strong>
                                Artikel 9. Overmacht</strong>
                            <p>
                                <b>9.1</b> Onverminderd de overige aan haar toekomende rechten, heeft 999 Games in geval van overmacht het recht om, naar eigen keuze, de uitvoering van uw bestelling op te schorten, dan wel de overeenkomst zonder rechterlijke tussenkomst te ontbinden, zulks door u dit schriftelijk mee te delen en zulks zonder dat 999 Games gehouden is tot enige schadevergoeding, tenzij dit in de gegeven omstandigheden naar maatstaven van redelijkheid en billijkheid onaanvaardbaar zou zijn.</p>
                            <p>
                                <b>9.2</b> Onder overmacht wordt verstaan iedere tekortkoming welke niet aan 999 Games kan worden toegerekend, omdat zij niet te wijten is aan haar schuld en noch krachtens de wet, rechtshandeling of in het verkeer geldende opvattingen voor haar rekening komt.</p>
                            <strong>
                                Artikel 10. Diversen</strong>
                            <p>
                                <b>10.1</b> Indien u aan 999 Games schriftelijk opgave doet van een adres, is 999 Games gerechtigd aan dat adres alle bestellingen te verzenden, tenzij u de aan 999 Games schriftelijk opgave doet van een ander adres waaraan uw bestellingen dienen te worden gezonden.</p>
                            <p>
                                <b>10.2</b> Wanneer door 999 Games gedurende korte of langere tijd al dan niet stilzwijgend afwijkingen van deze Voorwaarden zijn toegestaan, laat dat onverlet haar recht alsnog directe en strikte naleving van deze Voorwaarden te eisen. U kunt nimmer enig recht doen laten gelden op grond van het feit dat 999 Games deze Voorwaarden soepel toepast.</p>
                            <p>
                                <b>10.3</b> Indien een of meer van de bepalingen van deze Voorwaarden of enige andere overeenkomst met 999 Games in strijd mochten zijn met enig toepasselijk rechtsvoorschrift, zal de betreffende bepaling komen te vervallen en zal deze worden vervangen door een door 999 Games vast te stellen nieuwe rechtens toelaatbare vergelijkbare bepaling.</p>
                            <p>
                                <b>10.4</b> 999 Games is bevoegd om bij de uitvoering van uw bestelling(en) gebruik te maken van derden.</p>
                            <strong>
                                Artikel 11. Toepasselijk recht en bevoegde rechter</strong>
                            <p>
                                <b>11.1</b> Op alle rechten, verplichtingen, aanbiedingen, bestellingen en overeenkomsten waarop deze Voorwaarden van toepassing zijn, alsmede op deze Voorwaarden, is uitsluitend Nederlands recht van toepassing.</p>
                            <p>
                </p>
            </div>
        </div>
    </div>
@endsection
