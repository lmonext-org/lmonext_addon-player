<?php
/**
 * Project: LMOnext
 * Filename: addon/player/hooks_frontend.php
 * Fileversion: 1.0.0
 *
 * @license   GPL-3.0-only
 *
 * Wird durch AddonManager::bootFrontend() geladen.
 * Registriert die Frontend-Hooks des Spielerstatistik-Addons.
 */

declare(strict_types=1);

// ── Hook: liga.view_order — spielerstatistik zum View-Order-Array hinzufügen ─
registerHook('liga.view_order', function (array $data): array {
    if (!in_array('spielerstatistik', $data['order'] ?? [], true)) {
        $data['order'][] = 'spielerstatistik';
    }
    return $data;
});

// ── Hook: liga.view_render — spielerstatistik View rendern ───────────────────
registerHook('liga.view_render', function (array $data): array {
    if ($data['view'] === 'spielerstatistik' && function_exists('renderSpielerstatistikView')) {
        $data['inhalt'] = renderSpielerstatistikView((int)$data['liga_id']);
    }
    return $data;
});
