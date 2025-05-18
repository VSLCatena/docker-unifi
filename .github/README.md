# Information about the workflows
Contains information about the github workflows that are used in this repository.

## Release Drafter
The `workflows/release-drafter.yml` is using https://github.com/release-drafter/release-drafter to update the release notes that are in draft when a Pr is merged.
When this PR contains labels it will use those labels to categorize the changes in the release notes which are defined in `release-drafter.yml`.
When you add a version label (major, minor, patch) to the PR it will also update to the correct version in the release notes.

### How does publishing work?
The release drafter doesn't do any publishing, it only updates the release notes in the draft release.
But if you publish the draft github will send a **[published]** event which will trigger the `workflows/docker-publish.yml` workflow.

## Docker publish
The `workflows/docker-publish.yml` is the way to publish the docker images to the github package registry.
This is done by releasing the draft on the github releases page of the repository, when this happens the `docker-publish.yml` workflow will be triggered.

## PR label
the `workflows/pr-label.yml` is a workflow that will validate if the PR has a label that is defined in the `pr-label.yml` file.
Please make this file required for the PR to be merged. This way the release draft will be updated correctly when a PR is merged so its more clear
what kind of changes are in the release.