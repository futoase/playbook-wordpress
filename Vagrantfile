# -*- mode: ruby -*-
# vi: set ft=ruby :

VAGRANTFILE_API_VERSION = "2"

BOX_DIR = File.expand_path("~/.box")
BOX_NAME = "CentOS-6.5-x86_64-minimal"
BOX_PATH = File.expand_path("~/.box/#{BOX_NAME}.box")

if !FileTest.exists?("packer/builds")
  Dir.mkdir("packer/builds")
end

if !FileTest.exists?(BOX_PATH)
  system(%W(
    cd packer && 
    packer build template.json && 
    mkdir -p #{BOX_DIR} && 
    mv builds/#{BOX_NAME}.box #{BOX_PATH} 
  ).join(' '))
end

$stop_iptables = <<EOF
  service iptables stop
EOF

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|

  config.vm.box = BOX_NAME
  config.vm.box_url = BOX_PATH

  config.vm.network :private_network, ip: "192.168.33.123"
  config.ssh.forward_agent = true

  config.vm.provision :shell, inline: $stop_iptables

  config.vm.provider :virtualbox do |vb|
    vb.gui = false
    vb.customize ["modifyvm", :id, "--memory", "512"]
    vb.customize ["modifyvm", :id, "--natdnshostresolver1", "on"]
    vb.customize ["modifyvm", :id, "--natdnsproxy1", "on"]
  end

  config.vm.provision :ansible do |ansible|
    ansible.playbook = "site.yml"
    ansible.limit = "all"
    ansible.inventory_path = "vagrant.box"
    ansible.verbose = "vvvv"
  end

end
