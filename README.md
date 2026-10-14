# Website der Fachberufsschule Villach 2

Statische Website ohne Datenbank und ohne Updates. Hosting: GitHub Pages (kostenlos).

## News, Team und Bilder bearbeiten

1. Öffnen Sie <https://app.pagescms.org> und melden Sie sich mit GitHub an.
2. Wählen Sie das Projekt **fbs-villach-2**.
3. Links sehen Sie drei Bereiche:
   - **News**: Beitrag hinzufügen, Titel, Datum, Kategorie, Text und Foto eintragen, dann **Save** klicken.
   - **Team**: Direktion, Sekretariat und Lehrer*innen bearbeiten, Fächer und Fotos ergänzen.
   - **Bilder der Seite**: die großen Fotos auf der Startseite und bei den Lehrberufen austauschen.
4. Nach dem Speichern ist die Änderung nach etwa einer Minute online.

Die Startseite zeigt automatisch die drei neuesten News. Alle News stehen auf der Seite „News“.

## Aufbau

| Datei | Inhalt |
|---|---|
| `index.html` | Startseite |
| `lehrberufe.html` | Alle Lehrberufe |
| `lehrerinnen.html` | Lehrer*innen als Karteikarten |
| `news.html` | Alle News |
| `impressum.html`, `datenschutz.html` | Rechtliches (gelb markierte Stellen ergänzen) |
| `content/*.json` | News, Team und Bilder (werden über Pages CMS bearbeitet) |
| `images/` | Hochgeladene Fotos |
| `assets/` | Gestaltung, Schriften, Skript |

Schriften: Atkinson Hyperlegible und Barlow Semi Condensed, beide unter der SIL Open Font License, lokal eingebunden (keine Verbindung zu Google).
