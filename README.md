# Friends Of Shopware Plugin Template

[![Twitter Follow](https://img.shields.io/twitter/follow/ShopwareFriends?style=flat-square&logo=twitter)](https://twitter.com/ShopwareFriends)
[![Slack](https://img.shields.io/badge/Slack-%23friendsofshopware-blue?style=flat-square&logo=Slack)](https://slack.shopware.com)

**Plugin Template** is a repository that provides a pure template to make it easier to create a new plugin project (check the [Creating a repository from a template][gh:template] article).
The main goal of this template is to speed up the setup phase of plugin development for both new and experienced developers by preconfiguring the project scaffold and CI, linking to the proper documentation pages, and keeping everything organized.

[gh:template]: https://docs.github.com/en/repositories/creating-and-managing-repositories/creating-a-repository-from-a-template


## Getting started

Before we dive into plugin development and everything related to it, it's worth mentioning the benefits of using GitHub Templates.
By creating a new project using the current template, you start with no history or reference to this repository.
This allows you to create a new repository easily without copying and pasting previous content, clone repositories, or clearing the history manually.

All you have to do is click the <kbd>Use this template</kbd> button (you must be logged in with your GitHub account).

After using the template to create your blank project, the [Template Cleanup][file:template_cleanup.yml] workflow will be triggered to override or remove any template-specific configurations, such as the plugin name, current changelog, etc.
Once this is complete, the project is ready to be cloned to your local environment.

For the last step, you have to manually review the configuration variables described in the [`gradle.properties`][file:gradle.properties] file and *optionally* move sources from the *com.github.username.repository* package to the one that works best for you.
Then you can get to work implementing your ideas.