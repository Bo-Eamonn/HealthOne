# Behoefteanalyse
![Logo](/static/images/logo.png)

Project: HeathOne

Eureka

Team: Bo-Eamonn de Snoo

Cohort: 2019

Klant: Zilverenkruis

Versie: 1.1

Datum: 10-11-2020

# Inhoud

[1 Inleiding](#1-inleiding)

[2 Missie van de klant](#2-missie-van-de-klant)

[3 Huidige situatie](#3-huidige-situatie)

[4 Gewenste situatie](#4-gewenste-situatie)

[5 Het product](#5-het-product)

[5.1 Product eisen](#51-product-eisen)

[6 Doelgroep(en)](#6-doelgroepen)

[7 Projectdoelstelling(en)](#7-projectdoelstellingen)

[8 Uitwerking Interview Klant](#8-uitwerking-interview-klant)


# 1. Inleiding

Dhr. Beenakker, van het Zilverenkruis, heeft contact met ons opgezocht en zijn probleem aan ons uitgelegd. Vanuit dat gesprek is dit document samengesteld, doormiddel van dit document hebben wij zijn eisen op een rijtje kunnen zetten en kunnen verwerken. Zijn missie, huidige en gewenste situatie staan hierin. Ook staat het product erin verwerkt, samen met de producteisen en de gewenste doelgroep. Wij kijken er naar uit om deze opdracht van Dhr. Beenakker aan te pakken.

Dit document vormt de basis van het bouwen van de webapplicatie van Dhr. Beenakker voor het Zilverenkruis. Mochten er tijdens dit proces een probleem ontstaan, kijken wij uit naar een reactie. Zodat beide partijen weten waar zij aan toe zijn tijdens het ontwikkelen van deze webapplicatie.


# 2. Missie van de klant

Uit het interview met de klant kwam naar voor dat de klant de situatie voor haar klanten makkelijker wil maken, zodat de klanten zonder papiertje van de dokter naar de apotheek komt en sneller geholpen kan worden. Hier heeft de klant een oplossing voor bedacht, een database met interface voor de verschillende gebruikers dat alle gegevens makkelijk en over zichtbaar houdt. Niet alleen voor de klanten van onze klant zal dit fijner zijn maar voor onze klant komen er nieuwe opties beschikbaar. Zo kunnen rekeningen nu automatisch betaald en door gefactureerd worden.

De missie van de klant is het huidige systeem weggooien en overstappen naar een database zodat de klanten van onze klant makkelijker en sneller geholpen kunnen worden. Dit voorkomt frustratie en stres.


# 3. Huidige situatie

Momenteel ervaren de klanten van onze klant een verveleden situatie als ze van de doctor afkomen en naar de apotheek moeten. Met een briefje over straat en bij de apotheek lange wachttijden. Mocht je dan uiteindelijk aan de beurt komen dan moet je nog verschillende gegevens opgeven, naam, geboortedatum, adres etc. Dit alleen maar om er zeker van te zijn dat je de juiste persoon bent die de medicatie komt ophalen.
 Als ze het nog niet klaar hebben liggen moet je daar weer wachten en als mensen ergens een hekel aan hebben is het wel wachten. Buiten het feit dat je moet wachten kan je wel eens het briefje kwijtraken.
 In sommige gevallen kan het voorkomen dat alles wel meezit, je hebt je briefje nog en er is geen wachttijd. Dan kom je bij de balie van de apotheek en denk je bij jezelf dit is te mooi om waar te zijn, dat is het dan ook. Je geeft je briefje en de medewerker van de apotheek kan het recept niet lezen. We kennen het allemaal wel het bekende doctors-handschrift.

Dan krijgen we nog het feit dat de medicatie betaald moeten worden, verzekerde en onverzekerde medicatie. Momenteel worden de rekening eind van de dag per post verstuurd en bij onze klant handmatig gesorteerd. Gesorteerd tussen verzekerde en onverzekerde medicatie. Alle medicatie wordt betaald maar de onverzekerde medicatie word handmatig gefactureerd naar de klanten van onze klant.


# 4. Gewenste situatie

De klant wil af van onleesbare papieren doctorsrecepten en het overbodig veel gegevens vragen bij de apotheek. Dit allemaal zodat de ervaring van de klant makkelijker verloopt. Wanneer dit werkt is de mogelijkheid beschikbaar om automatisch door te factureren naar de klanten van onze klant

Dit moet gerealiseerd worden door middel van een database met verschillende interfaces voor de verschillende gebruikers. Van uit het interview is naar voren gekomen dat er 3 gebruikers zijn die toegang hebben tot de database via een interface.

Onze klant (Het zilverenkruis), doctoren en apothekers.

Onze klant heeft toegang tot alles want het is haar applicatie. Doctoren hebben toegang tot alle gegevens en kunnen allen recepten uitschrijven. De apotheek kan het nieuwe recept zien en kan de rekening van het recept in 1x sturen naar onze klant na afhalen van het recept.


# 5. Het product

De klant wilt een database die gebruikt kan worden door medewerkers van het Zilverenkruis, medewerkers van de apotheek en door doctoren.
 Eenieder zal zijn eigen interface krijgen met zijn eigen mogelijkheden.

Zo kan het zilverenkruis gegevens aanpassen, (volledige CRUD-toegang). Maar ook alle gegevens inzien die er binnen de database te zien zijn.

Doctoren kunnen daarentegen veel minder. Een doctor kan alleen medicatie inzien en gegevens uitlezen die bekend zijn binnen het systeem denk aan woon/contact gegevens. De medische geschiedenis van een persoon en of het recept is opgehaald of niet kan de doctor ook in zien.

Een medewerker van de apotheek kan simpel gezegd niks. Tuurlijk kunnen ze wel dingen maar voor deze applicatie kunnen ze alleen checken of de klant van onze klant een recept op komt halen. Apothekers kunnen ook aangeven of het recept is opgehaald of niet. Indien het opgehaald is wordt er automatisch een rekening gestuurd naar het zilverenkruis.


## 5.1 Product eisen

De volgende eisen zijn naar voor gekomen tijdens het interview met de klant.

 **Zilverenkruis**

Het systeem wat bedoeld is voor een medewerker bij het zilverenkruis heeft de volgende functionaliteiten.
- Zoeken op klant naam (Voor- en achter -naam)
- Alle klantgegevens inzien en indien nodig aanpassen
- Gegevens van de artsen inzien
- Verzekerde medicatie aanpassen
- Medicatie geschiedenis inzien
- Kan inzien welke recepten zijn opgehaald en welke niet
- Kan recepten betalen en kan checken of het verzekerd is of niet
- Nieuwe klant toevoegen

 **Dokter**

Het systeem dat bedoeld is om door een dokter te gebruiken heeft de volgende functionaliteiten.
- Zoeken op kant naam (Voor- en achter- naam)
- Kan alle klantgegevens inzien
- Kan recepten uitschrijven
- Kan de medicatie geschiedenis van een klant inzien
- Kan inzien welke medicatie wel of niet verzekerd is
- Kan zien welke medicatie is opgehaald en welke niet

 **Apotheek**
 
Het systeem dat bedoeld is om door een medewerker van de apotheek te gebruiken heeft de volgende functionaliteiten.
- Kan inzien welke recepten nog opgehaald moeten worden
- Kan aangeven of het recept is opgehaald of niet
- Krijgt na 24uur een melding als een recept nog niet is opgehaald zodat ze kunnen bellen
- Stuurt automatisch eind van de dag alle rekeningen op naar het Zilverenkruis.


# 6. Doelgroep(en)

De applicatie is bedoeld voor de doctoren en apothekers die te maken hebben met klanten van het zilverenkruis.

De gebruikers van de applicatie verschillen. Zo heeft een doctor veel langer geleerd in verschillende onderwerpen dan een apotheker, en de medewerkers van het zilverenkruis zullen de ballen verstand hebben van medicatie. Aangezien er per interface ook een verschil is maakt dit niet heel erg veel uit.

Naar schatting gaat de het gehele systeem gebruikt worden door mensen met een vast contract, dus geen stagiairs in verband met de privacy van de personen die terug te vinden zijn in het systeem.

Dan krijg je dus een leeftijd categorie van zo&#39;n 22 tot 67 jaar. Wij gaan er van uit dat de gebruikers niet bekend zijn met IT-zaken dus alles moet zo simpel mogelijk zijn.


# 7. Projectdoelstelling(en)

Onze klant wil een database met verschillende interfaces als webapplicatie waardoor de communicatie tussen de verschillende partijen beter verloopt met als doel dat het voor de klanten van onze klant het makkelijkst gaat.

Dit project moet eigenlijk in de week van 16 november af zijn maar in de huidige situatie zal dit niet lukken. Wel ga ik mijn uiterste best doen om dit niet al te ver na de opleverdatum in te leveren.


# 8. Uitwerking Interview Klant:

Uitwerking interview; 14-10-20

Dhr. Beenakker van het zilverenkruis is op bezoek bij eureka, met het volgende probleem.

Momenteel moeten de klanten, die bij het zilverenkruis een zorgverzekering hebben, van de dokter met een receptbriefje over straat naar de apotheek. Waarna er bij de apotheek het juiste medicijn opgezocht wordt en meegegeven wordt aan de klant van het zilverenkruis. Eind van de dag stuurt een medewerker van de apotheek alle rekeningen op naar het zilverenkruis. Hier wordt dan alles betaald en per persoon, per recept gekeken of het vergoed wordt. Indien het niet vergoed wordt stuurt het zilverenkruis een rekening naar de klant zodat alles netjes betaald wordt.

Dan kan het wel eens vorkomen dat je geen tijd hebt om direct na de afspraak bij de dokter naar de apotheek te gaan. Dan kan het ook nog eens gebeuren dat je vergeet dat je een receptbriefje in je zak hebt zitten terwijl je hem in de wasmachine gooit. Dan moet je een nieuwe afspraak maken of even bellen en dan kost allemaal tijd en moeite.

Nu heeft Dhr. Beenakker heir wel een oplossing voor.

In de ideale situatie gaat vrijwel alles automatisch en hoeven klanten van het Zilverenkruis niet meer met een briefje over straat. Dan kan je niks meer kwijtraken en hoef je alleen nog naar de apotheek te gaan voor de medicatie.

Dhr. Beenakker ziet dit als volgt gebeuren;

Je hoeft niet meer met briefjes over straat en kan ze dus ook niet meer kwijtraken. De huisarts weet in 1 keer via een medicatie tabel welke medicijnen wel en niet verzekerd worden. En kan hier dus direct met de klant in overleg gaan of het een optie is of niet. De dokter heeft toegang tot alle gegevens van de klant zodat hij altijd voor iedereen zijn werk kan doen. Heeft de dokter een nieuwe patiënt dan hoeft hij hem/haar alleen maar op te zoeken binnen het systeem en staan alle gegevens meteen open voor hem. Hierdoor kan de dokter meteen zien welke medicatie de klant al gebruikt en gehad heeft.

Zodra de dokter een recept heeft uitgeschreven kan de klant op zijn gemak naar de apotheek gaan om de medicatie op te halen. Eenmaal bij de apotheek geeft de persoon zijn verzekering nummer op door het pasje te laten scannen (kan ook handmatig ingevoerd worden). Dan verschijnt er bij de apotheek op het scherm de naam van de persoon en het recept wat nog opgehaald moet worden. Zodra het opgehaald is wordt dan aangegeven en eind van de dag wordt de rekening nog verstuurd naar het zilverenkruis.
 Indien het recept niet opgehaald wordt, krijgen de medewerkers van de apotheek na 24uur een melding dat de klant zijn of haar medicatie nog niet heeft opgehaald. Hieruit kunnen de medewerkers van de apotheek handelen door bijvoorbeeld te bellen naar de klant.

Wanneer de rekeningen verstuurd zijn komen die binnen bij het zilverenkruis. Hier word dan automatisch onderscheid gemaakt tussen de wel en niet verzekerde medicatie. Alle kosten van de onverzekerde medicatie worden direct toegerekend bij de factuur van de klant. Buiten deze stap om word alles wel netjes betaald.
 Wanneer iemand een zorgverzekering wilt afsluiten bij het Zilverenkruis dan kan een medewerker van het zilverenkruis een nieuw persoon toevoegen in de database zodat het zilverenkruis en doktorren de nieuwe klant zo snel mogelijk kunnen helpen.
 Mocht er iemand verhuizen of van contact gegevens wisselen kan dit aangepast worden door een medewerker van het Zilverenkruis.

Het Zilverenkruis kan hierdoor namelijk alle gegevens inzien van de verzekerde-klant. Welke medicatie de klant gebruikt, kreeg of nog moet ophalen. Ook beheert het Zilverenkruis de tabel met verzekerde medicatie.

Als we dan alles even opsommen dan zijn dit de vereisten die Dhr. Beenakker in gedachten heeft.

Er zijn 3 systemen binnen het systeem;

**Zilverenkruis**

Het systeem wat bedoeld is voor een medewerker bij het zilverenkruis heeft de volgende functionaliteiten.
- Zoeken op klant naam (Voor- en achter -naam)
- Alle klantgegevens inzien en indien nodig aanpassen
- Gegevens van de artsen inzien
- Verzekerde medicatie aanpassen
- Medicatie geschiedenis inzien
- Kan inzien welke recepten zijn opgehaald en welke niet
- Kan recepten betalen en kan checken of het verzekerd is of niet
- Nieuwe klant toevoegen

 **Dokter**

Het systeem dat bedoeld is om door een dokter te gebruiken heeft de volgende functionaliteiten.
- Zoeken op kant naam (Voor- en achter- naam)
- Kan alle klantgegevens inzien
- Kan recepten uitschrijven
- Kan de medicatie geschiedenis van een klant inzien
- Kan inzien welke medicatie wel of niet verzekerd is
- Kan zien welke medicatie is opgehaald en welke niet

 **Apotheek**
 
Het systeem dat bedoeld is om door een medewerker van de apotheek te gebruiken heeft de volgende functionaliteiten.
- Kan inzien welke recepten nog opgehaald moeten worden
- Kan aangeven of het recept is opgehaald of niet
- Krijgt na 24uur een melding als een recept nog niet is opgehaald zodat ze kunnen bellen
- Stuurt automatisch eind van de dag alle rekeningen op naar het Zilverenkruis.