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

## min_core_version-Korrektur

- min_core_version von "1.4.0" auf "1.9.0" korrigiert (Copy-Paste-Rest aus
  einer älteren internen Versionierung, faktisch wirkungslos, da niedriger
  als jede real existierende LMOnext-Version - AddonManager konnte damit nie
  eine zu alte Core-Version blockieren). "1.9.0" ist die tatsächliche
  LMOnext-Core-Version, ab der der Addon-Manager überhaupt existiert.

## Version 1.4.2

- Bugfix: "db_tables" in addon.json korrigiert - die bisherige Deklaration
  war unvollständig und teils falsch benannt (echte Tabellen: 
  spielerstat_spalten, spielerstat_spieler, spielerstat_werte,
  spielerstat_config, spieler_global - OHNE DB-Präfix). Insbesondere
  fehlten spielerstat_werte und spieler_global komplett. Betraf bisher
  keine sichtbare Funktion, wäre aber beim neuen "Daten löschen"-Feature
  im Addon-Manager (siehe Core-CHANGELOG.md src/Addon/AddonManager.php
  1.4.0) auf einen unvollständigen Cleanup hinausgelaufen.
