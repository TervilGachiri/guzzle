
# Git practice 🙌

<img src='../resources/images/practise.gif' alt="recap">

## Aim 🏹

###  Working with GIT branches :)

- Before we start working on this weeks exercises, let us create a branch named phpscripting from our main branch
  - git checkout -b phpscripting main
- Practise switching between branches
  - git checkout main
  - git checkout phpscripting
- Ensure that you are on the branch phpscripting before you start working
  - git checkout phpscripting
- Work on all the exercises and once done; add to staging area
  - git add .
- Commit changes to local Repository (you can have separate commits for HTML-n-CSS , JavaScript and PHP);
  - git commit -m "Completed exercise ......"
- Merge all work done to main (The --no-ff flag causes the merge to always create a new commit object,This avoids losing information about the historical existence of a feature branch and groups together all commits that together added the feature.)
  - git merge --no-ff phpscripting
- Delete the branch
  - git branch -d phpscripting
- Push changes to your online repo
  - git push my-origin main

#### @Refs
- [https://git-scm.com/docs/git-checkout](https://git-scm.com/docs/git-checkout)
- [https://git-scm.com/docs/git-merge](https://git-scm.com/docs/git-merge)
- [https://git-scm.com/docs/git-branch](https://git-scm.com/docs/git-branch)

#### @Credits
- [Image](https://www.nytimes.com/)


> "Those who cannot remember the past are condemned to repeat it" _George Santayana_