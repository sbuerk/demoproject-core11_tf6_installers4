TYPO3v11 TestingFramework 7 ComposerInstaller 4 Unit Test Error Demo
====================================================================

# Description

This project is a simple repoduction project to demonstrate:

https://github.com/TYPO3/testing-framework/issues/403


# Verify

```shell
$ git clone git@github.com:sbuerk/demoproject-core11_tf6_installers4.git
$ cd demoproject-core11_tf6_installers4
$ Build/Scripts/runTests.sh -s composerInstall
$ Build/Scripts/runTests.sh -s unit
```

