<?php

$green = "\033[0;32m";
$blue = "\033[0;34m";
$yellow = "\033[1;33m";
$cyan = "\033[0;36m";
$reset = "\033[0m";
$bold = "\033[1m";

echo PHP_EOL;
echo "{$green}╔════════════════════════════════════════════════════════════════════╗{$reset}".PHP_EOL;
echo "{$green}║{$reset}  {$bold}Laravel Blade Starter - Installation Complete!{$reset}              {$green}║{$reset}".PHP_EOL;
echo "{$green}╚════════════════════════════════════════════════════════════════════╝{$reset}".PHP_EOL;
echo PHP_EOL;

echo "{$yellow}📋 Next Steps:{$reset}".PHP_EOL;
echo PHP_EOL;

echo "{$cyan}1.{$reset} Configure your environment:".PHP_EOL;
echo "   {$blue}→{$reset} Edit {$bold}.env{$reset} file with your database credentials".PHP_EOL;
echo "   {$blue}→{$reset} Update APP_NAME, APP_URL, and other settings".PHP_EOL;
echo PHP_EOL;

echo "{$cyan}2.{$reset} Install Node dependencies (if not already done):".PHP_EOL;
echo "   {$blue}→{$reset} Run: {$bold}npm install{$reset}".PHP_EOL;
echo PHP_EOL;

echo "{$cyan}3.{$reset} Build frontend assets:".PHP_EOL;
echo "   {$blue}→{$reset} Run: {$bold}npm run build{$reset} (production)".PHP_EOL;
echo "   {$blue}→{$reset} Or: {$bold}npm run dev{$reset} (development)".PHP_EOL;
echo PHP_EOL;

echo "{$cyan}4.{$reset} Start the development server:".PHP_EOL;
echo "   {$blue}→{$reset} Run: {$bold}composer dev{$reset}".PHP_EOL;
echo "   {$blue}→{$reset} This starts Laravel server, queue worker, and Vite".PHP_EOL;
echo PHP_EOL;

echo "{$cyan}5.{$reset} Access your application:".PHP_EOL;
echo "   {$blue}→{$reset} Open: {$bold}http://localhost:8000{$reset}".PHP_EOL;
echo PHP_EOL;

echo "{$green}✨ Features included:{$reset}".PHP_EOL;
echo '   • Laravel Breeze authentication scaffolding'.PHP_EOL;
echo '   • Role-Based Access Control (RBAC) ready structure'.PHP_EOL;
echo '   • Role-based dashboards (Admin, Super Admin)'.PHP_EOL;
echo '   • Tailwind CSS configured'.PHP_EOL;
echo '   • Pest PHP testing framework'.PHP_EOL;
echo PHP_EOL;

echo "{$yellow}📖 Documentation:{$reset}".PHP_EOL;
echo "   {$blue}→{$reset} README.md for more details".PHP_EOL;
echo "   {$blue}→{$reset} GitHub: https://github.com/ianlabicani/laravel-blade-starter".PHP_EOL;
echo PHP_EOL;

echo "{$green}Happy coding! 🚀{$reset}".PHP_EOL;
echo PHP_EOL;
