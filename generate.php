<?php

function generateAnchor($text) {
    $text = strtolower($text);
    $text = preg_replace('/[^a-z0-9\s-]/', '', $text);
    $text = preg_replace('/[\s]+/', '-', $text);
    return trim($text, '-');
}

$csvFile = 'Portfolio EN - Лист1.csv';
$outputFile = 'README.md';

$projects = [];
if (($handle = fopen($csvFile, 'r')) !== false) {
    $headers = fgetcsv($handle);
    while (($data = fgetcsv($handle)) !== false) {
        $projects[] = array_combine($headers, $data);
    }
    fclose($handle);
}

$output = "# My Web Projects Portfolio\n\n";
$output .= "## Table of Contents\n\n";

foreach ($projects as $project) {
    $anchor = generateAnchor($project['Project Name']);
    $output .= "- [{$project['Project Name']}](#{$anchor})\n";
}

$output .= "\n---\n";

foreach ($projects as $project) {
    $anchor = generateAnchor($project['Project Name']);
    $output .= "## {$project['Project Name']}\n\n";

    if (!empty($project['Picture URL'])) {
        $output .= "![{$project['Project Name']}]({$project['Picture URL']})\n\n";
    }

    if (!empty($project['URL'])) {
        $output .= "**Website**: [{$project['URL']}]({$project['URL']})\n\n";
    }

    $output .= "**Duration**: {$project['Start Date']} – {$project['End Date']}\n\n";

    if (!empty($project['Description'])) {
        $output .= "**Description**:\n\n{$project['Description']}\n\n";
    }

    if (!empty($project['Key Skills'])) {
        $skills = array_map('trim', explode("\n", $project['Key Skills']));
        $skillsList = implode(', ', array_filter($skills));
        $output .= "**Key Skills**: {$skillsList}\n\n";
    }

    $output .= "---\n";
}

file_put_contents($outputFile, $output);
echo "README.md generated successfully.\n";
