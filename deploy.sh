MESSAGE=$1
git add .
git commit -m "$MESSAGE"
git push
php artisan config:clear
php artisan apidoc:generate
sls deploy --aws-profile budgit