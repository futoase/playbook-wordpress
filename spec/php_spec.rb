require 'spec_helper'

describe package('php') do
  it { should be_installed }
end

describe package('php-fpm') do
  it { should be_installed }
end

describe file('/etc/php.ini') do
  it { should be_file }
  its(:content) { should match /\[PHP\]/ }
end
