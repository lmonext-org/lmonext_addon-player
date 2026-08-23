# Changelog: player-Addon (LMOnext)

Dieses Addon war bis LMOnext 1.9.0-beta Teil des Core-Pakets. Mit der
Einführung des Addon-Manager-Frameworks (Beitrag Torsten Hofmann) wurde es
als eigenständiges, self-contained Paket extrahiert.

Die vollständige Entwicklungshistorie bis zur Extraktion steht im
CHANGELOG.md des LMOnext-Kernprojekts unter den Abschnitten
`addon/player/*`.

## Version 1.4.0

- Fehlende lang/-Dateien ergänzt (addon.json deklarierte lang_dir bereits,
  der Ordner fehlte aber im ersten Paket - Folge war "nav_spielerstatistik"
  als Klartext-Navigationseintrag statt einer Übersetzung). Enthalten jetzt
  alle 54 spst_*-Schlüssel (Admin) + 8 spst_*-Schlüssel (Frontend) + den
  neuen Schlüssel nav_spielerstatistik + ld_btn_spielerstatistik.
- "Spielerstatistik"-Button auf der Liga-Detailseite (Core) ist jetzt nur
  noch sichtbar, wenn dieses Addon aktiviert ist - siehe Core-Changelog
  admin/view_liga_detail.php 1.10.0.

## Version 1.3.1

- Als eigenständiges addon.json-Paket verpackt (Templates/Sprachdateien
  jetzt lokal im Addon statt zentral im Core), installierbar über
  Administrator → Addons.
