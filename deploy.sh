MESSAGE=$1
git add .
git commit -m "$MESSAGE"
git push 
SLS_DEBUG=* sls deploy --aws-profile budgit