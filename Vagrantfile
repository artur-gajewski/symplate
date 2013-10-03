Vagrant.configure("2") do |config|
  #Uncomment to enable virtualmachine boot debug
  #config.vm.provider "virtualbox" do |v|
  #  v.gui = true
  #end
  config.vm.define :web do |config|
    config.vm.synced_folder ".", "/vagrant", :nfs => true
    config.vm.box = "precise32"
    config.vm.box_url = "http://files.vagrantup.com/precise32.box"
    config.vm.network :private_network, ip: "192.168.111.205"
    config.vm.provision :ansible do |ansible|
      ansible.playbook = "provisioning/playbook.yml"
      ansible.inventory_path = "provisioning/ansible_hosts"
    end
  end
end