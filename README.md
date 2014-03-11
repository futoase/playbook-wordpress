playbook-wordpress
-------------------

![screen shot](https://f.cloud.github.com/assets/72997/2367441/6bc38a6e-a75f-11e3-9524-9cc66c9f1e4d.png)

Setup the host machine
----------------------

**Mac OS X only**.

You should be installed the homebrew.
Execute this command after installed the homebrew.

```
> brew bundle
```

```brew bundle``` is allows us to install of the required softwares.

Running of the ansible on vagrant?
-----------------------------------

You execute this command.

```
> vagrant up --provision
```

Can I access to the Wordpress on vagrant?
------------------------------------------

Yes, set this address to the internet browser. 

```
> open http://vagrant.192.168.33.123.xip.io/
```

Author
------

Original packer template is a https://github.com/hnakamur/my-packer-template-files.

LICENSE
-------

MIT.
